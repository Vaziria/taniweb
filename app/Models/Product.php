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

    public function user_wishlist(){
        return $this->belongsToMany(User::class, 'user_wishlist');
    }

    public function scopeNotHide($query){
        return $query->where('hide', false);
    }

    public function rate($rate){
        // perlu fix
    }
}
