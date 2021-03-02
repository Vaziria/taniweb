<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
	protected function getProduct($limit=15) {
        return Product::with('seller')->limit($limit)->get();
    }

    public function singlePage($id) {

    	$data = [];

    	$ulasan_product = function($query) {
    		$query->with('user')->orderBy('created_at', 'desc')->limit(50);
    	};

    	$product = Product::find($id);
    	$product->with([
           	'ulasan' => $ulasan_product,
           	'seller'
       	]);
    	
    	$data['product'] = $product;
    	$data['active_image'] = $product->image_1;
    	$data['product_terkait'] = $this->getProduct();

    	return view('dashboard.product.single-page', $data);
    }
}
