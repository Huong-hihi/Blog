<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text(225),
        'img' => $faker->image('public/storage/article_img', 100, 100, null, false),
    ];
});
