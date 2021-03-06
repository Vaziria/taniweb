<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{

    public function seller($id) {

    	$data = [];

    	$seller = Seller::inRandomOrder()->first();
    	$data['seller'] = $seller;
    	$data['title'] = $seller->seller_name;
    	
    	$products = Product::where('user_id', $seller->user_id)->get()->groupBy('cat_id');
    	$data['seller_products'] = $products;

    	return view('dashboard.seller.index', $data);
    }
}
