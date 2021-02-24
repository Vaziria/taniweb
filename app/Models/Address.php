<?php

namespace App\Models;

use App\Models\Reusable\UserModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends UserModel
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'district', 'city', 'province', 'nation', 'alamat' ];

}
