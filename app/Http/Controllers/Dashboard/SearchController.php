<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class SearchController extends Controller
{
	private $productSort = [
		'harga_tertinggi' => ['price', 'desc'],
		'harga_terendah' => ['price', 'asc'],
		'az' => ['name', 'asc'],
		'za' => ['name', 'desc']
	];

	protected function getProduct($request, $limit = 20) {

		$products = Product::where('name', 'like', "%$request->q%");

    	if ($cat_id = $request->cat_id)
    		$products->where('cat_id', $cat_id);

    	if ($price_min = $request->price_min)
    		$products->where('price', '>=', $price_min);

    	if ($price_max = $request->price_max)
    		$products->where('price', '<=', $price_max);

    	if ($request->sort && $sort = $this->productSort[$request->sort]) {
    		$products->orderBy(...$sort);
    	}

        return $products->paginate($limit);
    }

    public function index(Request $request) {
    	
    	if (!$request->q) return redirect()->route('dashboard.home');

    	$data = [];
    	$data['keyword'] = $request->q;
    	$data['request'] = $request;

    	$products = $this->getProduct($request);
    	$data['products'] = $products->items();
    	$data['product_total'] = $products->total();

    	if ($data['product_total'] == 0) $data['product_pilihan'] = Product::inRandomOrder()->limit(8)->get();

    	return view('dashboard.search.index', $data);
    }
}
