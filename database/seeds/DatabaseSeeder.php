<?php

use Illuminate\Database\Seeder;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Article::create([
                'title' => $faker->sentence(),
                'description' => $faker->sentence(20),
                'content' => $faker->paragraph(20)
            ]);
        }
    }
}
