<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Category::insert([
            'categoryName' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),

        ]);
    }
}
