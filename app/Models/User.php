<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    private $limit_alamat = 5;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email',
        'suspend',
        'created_at',
        'updated_at',
        'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function charts(){
        return $this->belongsToMany(Product::class, 'user_chart');
    }

    public function wishlists(){
        return $this->belongsToMany(Product::class, 'user_wishlist');
    }

    public function add_chart(Product $product){
        $this->charts()->attach($product->id);
    }

    public function remove_charts(array $ids){
        foreach($ids as $id){
            $this->charts()->detach($id);
        }
    }

    public function add_address(Address $alamat){
        $count = $this->address()->count();
        if($count >= $this->limit_alamat){
            return false;
        }
        $this->address()->save($alamat);
        
        return true;
    }

    public function suspend_seller(){
        $this->suspend = true;
        $this->products()->update([
            'hide' => true,
        ]);
        $this->save();
    }

    public function unsuspend_seller(){
        $this->suspend = false;
        $this->products()->update([
            'hide' => false,
        ]);
        $this->save();
    }
}
