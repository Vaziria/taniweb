<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Ulasan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create()->each(function($user){
            Seller::factory(1)->create(['user_id'=> $user->id]);
            $prod = Product::factory(25)->create([
                'user_id' => $user->id
            ])->each(function($product) use ($user){
                Ulasan::factory(12)->create(['product_id'=> $product->id, 'user_id' => $user->id]);
            });
            $user->products()->saveMany($prod);
        });
    }
}
