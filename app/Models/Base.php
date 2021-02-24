<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {
    public function user_scope($query, $id){
        return $query->where('user_id', $id);
    }
}