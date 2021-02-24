<?php

namespace App\Models;

use App\Models\Reusable\UserModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends UserModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'price', 'stock', 'stock_unit', 'description', 'image_1', 'image_2', 'image_3', 'image_4', 'cat_id'];

}
