<?php

namespace Database\Seeders;

use App\Models\Post;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Post::insert([
            'title' => $faker->firstNameMale,
            'post_text' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
    }
}
