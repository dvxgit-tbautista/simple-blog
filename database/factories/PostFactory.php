<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'post_text' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
