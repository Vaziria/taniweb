<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class UserController extends Controller
{
	protected function getProduct($limit=5) {
        return Product::inRandomOrder()->with('seller')->limit($limit)->get();
    }

    public function account() {
    	$data = [];
    	$data['title'] = 'Akun Saya';

    	return view('dashboard.user.account', $data);
    }

    public function orders() {
    	$data = [];
    	$data['title'] = 'Pesanan Saya';
    	$data['sample_product'] = Product::inRandomOrder()->first();

    	return view('dashboard.user.orders', $data);
    }

    public function order_detail() {
    	$data = [];
    	$data['title'] = 'Detail Pesanan';
    	$data['sample_product'] = Product::inRandomOrder()->first();
    	$data['sample_cart'] = $this->getProduct(10)->groupBy('seller.seller_name')->first();

    	return view('dashboard.user.order-detail', $data);
    }

    public function bills() {
    	$data = [];
    	$data['title'] = 'Tagihan Saya';
    	$data['sample_product'] = Product::inRandomOrder()->first();

    	return view('dashboard.user.bills', $data);
    }

    public function bill_detail() {
    	$data = [];
    	$data['title'] = 'Detail Tagihan';
    	$data['sample_product'] = Product::inRandomOrder()->first();

    	return view('dashboard.user.bill-detail', $data);
    }

    public function wishlist() {
    	$data = [];
    	$data['title'] = 'Wishlist';
    	$data['wishlists'] = $this->getProduct(10);

    	return view('dashboard.user.wishlist', $data);
    }
}
