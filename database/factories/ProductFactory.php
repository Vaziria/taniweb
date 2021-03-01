<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'price'=> $this->faker->numberBetween(20000, 100000),
            'stock' => $this->faker->numberBetween(20, 100),
            'stock_unit' => 'gr',
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'image_1' => $this->faker->imageUrl($width = 640, $height = 480),
            'cat_id' => $this->faker->numberBetween(1, 10),
            'weight' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
