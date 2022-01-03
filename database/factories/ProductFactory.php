<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText($maxNbChars = 50, $indexSize = 1),
            'quantity' => $this->faker->numberBetween($min = 10, $max = 200),
            'weight' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
            'price' => $this->faker->numberBetween($min = 100, $max = 2000),
            'tags' => $this->faker->randomElement($array = array ('tag10','tag2','tag4')),
        ];
    }
}
