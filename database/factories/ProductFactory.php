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
            "name" => $this->faker->word,
            "color_id" => $this->faker->numberBetween(1, 6),
            "memory" => $this->faker->numberBetween(512, 8096),
            "storage" => $this->faker->numberBetween(16, 128),
            "display_diagonal" => $this->faker->randomFloat(1, 4, 7),
            "os" => $this->faker->word,
            "company_id" => $this->faker->numberBetween(1, 10)
        ];
    }
}
