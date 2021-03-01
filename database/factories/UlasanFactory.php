<?php

namespace Database\Factories;

use App\Models\Ulasan;
use Illuminate\Database\Eloquent\Factories\Factory;

class UlasanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ulasan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'rating' => $this->faker->numberBetween(1, 2),
            'ulasan' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'foto' => '',
        ];
    }
}
