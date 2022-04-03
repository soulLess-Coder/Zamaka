<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word(),
            'sub_category_id' => $this->faker->randomDigit(),
            'sub_category' => $this->faker->word(),
        ];
    }
}
