<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class CartProductController extends Controller
{
	protected function getProduct($limit=5) {
        return Product::inRandomOrder()->with('seller')->limit($limit)->get();
    }

    public function index() {
    	$data = [];
    	$data['title'] = 'Keranjang';

    	$data['carts'] = $this->getProduct()->groupBy('seller.seller_name');
    	$data['recomendations'] = $this->getProduct(16);

    	return view('dashboard.cart.index', $data);
    }

    public function checkout() {
    	$data = [];
    	$data['title'] = 'Checkout';

    	$data['products'] = $this->getProduct(10)->groupBy('seller.seller_name')->first();

    	return view('dashboard.cart.checkout', $data);
    }
}
