<?php

namespace Database\Factories;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seller_name' => $this->faker->firstNameMale,
            'district' => $this->faker->city,
            'city' => $this->faker->city,
            'province' => $this->faker->city,
            'nation' => $this->faker->country
        ];
    }
}
