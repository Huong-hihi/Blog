<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Article::class, 10)->create();

        //     $faker = Faker\Factory::create();

        //     $limit = 10;

        //     for ($i = 0; $i < $limit; $i++) {
        //         DB::table('articles')->insert([
        //             'title' => $faker->title,
        //             'content' => $faker->text(225),
        //         ])->afterCreating(\App\Models\Article::class, function (\App\Models\Aricle $article, Faker $faker) {
        //             $article->img = $article->id . '.jpg';
        //             $article->save();
        //         });
        //     }
    }
}
