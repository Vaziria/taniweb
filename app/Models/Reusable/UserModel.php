<?php

namespace App\Models\Reusable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

abstract class UserModel extends Model {

    public static function scopeOfUser($query){
        return $query->where('user_id', Auth::user()->id);
    }
    
    public function user(){

        $this->belongsTo(User::class);
    }
}
