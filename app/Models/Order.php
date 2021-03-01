<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    private $alamat_key = [ 'name', 'phone', 'district', 'city', 'province', 'nation', 'alamat' ];

    public function order_product(){
        return $this->hasMany(OrderProduct::class);
    }

    public function fill_address($id){
        $address = Address::find($id);
        if($address){
            return false;
        }

        foreach($this->alamat_key as $key){
            $this->{ 'buyer_'.$key } = $address->{ $key };
        }

        return true;
    }

    public function create_order_prod(Product $product, $qty){
        $crtqty = $product->stock - $qty;
        if($crtqty < 0){
            return false;
        }

        if($crtqty == 0){
            $product->note = 'stock product habis';
        }
        $product->stock = $crtqty;

        $ordprod = new OrderProduct();
        $ordprod->fill([
            'product_id' => $product->id,
            'name' => $product->name,
            'quantity' => $qty,
            'price' => $product->price,
            'total' => $product->price * $qty,
        ]);
        
        return $ordprod;
    }

    public static function checkout($alamatid, $ppayload){
        $order = false;

        DB::transaction(function () use ($alamatid, $ppayload, $order){
            $dorder = new Order();

            $subtotal = 0;
            $ongkir = 0;
            $seller_id = null;

            foreach($ppayload as $payload){
                $product = Product::find($payload['id']);

                // cek satu seller
                if($seller_id == null){
                    $seller_id = $product->user_id;
                }
                if($seller_id != $product->user_id){
                    throw new Exception('seller harus sama');
                }

                $ord = $dorder->create_order_prod($product, $payload['quantity']);
                
                // save order product
                if($ord){
                    $dorder->order_product()->save($ord);
                } else {
                    throw new Exception('checkout ikan gagal');
                }

                $subtotal += $ord->total;
            }

            $dorder->subtotal = $subtotal;
            $dorder->total = $subtotal + $ongkir;
            $dorder->addr_id = $alamatid;
            $dorder->seller_id = $seller_id;
            $dorder->buyer_id = Auth::id();

            $dorder->save();
            $order = $dorder;
        });

        return $order;
    }
    
}
