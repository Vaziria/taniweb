<?php

namespace App\Http\Controllers\ForPublic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PublicProductController extends Controller
{
    public function single_product(Request $request, $id){
       $product = Product::with([
           'ulasan'=> function($query){
               $query->with('user')->orderBy('created_at', 'desc')->limit(50);
           },
           'seller'
       
       ])->whereIn('id', [$id])->get();

       print_r('<pre>');
       print_r($product->toArray());
       print_r('</pre>');
    }

    public function checkout(){
        // implementasi checkout
    }
}
