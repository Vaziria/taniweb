<?php

namespace App\Models;

use App\Models\Reusable\UserModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Product extends UserModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'price', 'stock', 'stock_unit', 'description', 'image_1', 'image_2', 'image_3', 'image_4', 'cat_id'];

    public function user_chart(){
        return $this->belongsToMany(User::class, 'user_chart');
    }

    public function seller(){
        return $this->belongsTo(Seller::class, 'user_id', 'user_id');
    }

    public function user_wishlist(){
        return $this->belongsToMany(User::class, 'user_wishlist');
    }

    public function order(){
        return $this->belongsToMany(Order::class, 'order_product_pivot');
    }

    public function ulasan(){
        return $this->hasMany(Ulasan::class);
    }

    public function scopeNotHide($query){
        return $query->where('hide', false);
    }

    public function rate($uid, $data){
        $rate = $data['rating'];
        
        $ulasan = new Ulasan();
        $ulasan->fill($data);
        $ulasan->user_id = $uid;

        $this->ulasan()->save($ulasan);

        $newrating = (($this->avg_rating * $this->rating_count) + $rate) / ($this->rating_count + 1);
        $this->avg_rating = $newrating;
        $this->rating_count = $this->rating_count + 1;

        $this->save();
    }

}
