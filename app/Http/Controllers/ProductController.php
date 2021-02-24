<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    
    private $validate = [
        'name'=> 'required',
        'price' => 'required',
        'stock'=> 'required',
        'stock_unit' => 'required',
        'description'=> 'required',
        'image_1' => 'nullable|file|max:7000',
        'image_2' => 'nullable|file|max:7000',
        'image_3' => 'nullable|file|max:7000',
        'image_4' => 'nullable|file|max:7000',
        'cat_id' => 'required',
    ];
    private $key_image = ['image_1', 'image_2', 'image_3', 'image_4'];

    public function getUser(){
        return  User::find(Auth::user()->id);    
    }
    
    public function index()
    {   
        $user = Auth::user();
        $data = Product::ofUser()->get();
        return view('seller.product.list', [
            'products'=> $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.product.create');
    }

    public function save_image(Product $product, Request $req){

        foreach($this->key_image as $key){
            if($req->file($key)){
                $product->{ $key } = $this->save_image_item($req->file($key));
            }
        }
    }

    public function save_image_item(UploadedFile $file){
        $hash = md5_file($file->getRealPath());
        $fname = $hash.$file->guessExtension();
        $path = Storage::putFileAs('images', $file, $fname);

        return $path;
    }

    public function detect_change_image(Product $product, Request $req){
        foreach($this->key_image as $key){
            if($req->file($key)){
                $path = $product->{ $key };
                Storage::delete($path);

                $path = $this->save_image_item($req->file($key));
                $product->{ $key } = $path;
            }
        }
    }

    public function store(Request $request)
    {   
        
        // name	price	stock	stock_unit	description	image_1	image_2	image_3	image_4	cat_id

        
        // belum divalidasi
        $fixdata = $request->validate($this->validate);

        $product = new Product();
        $product->fill($fixdata);
        $product->user_id = Auth::user()->id;

        // saving image
        $this->save_image($product, $request);

        $product->save();
        
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('seller.product.item', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('seller.product.create', [
            'product'=> $product,
            'editmode' => true,
        ]);
    }

    
    public function update(Request $request, Product $product)
    {
        $fixdata = $request->validate($this->validate);
        $product->fill($fixdata);
        $this->detect_change_image($product, $request);
        $product->save();
        return view('seller.product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {   
        Product::destroy($product->id);
        return view('seller.product.list');
    }
}
