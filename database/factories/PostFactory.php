<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->title;
    return [
        'status' => Post::STATUS_PUBLISHED,
        'locale' => config('app.locale'),
        'title' => $title,
        'slug' => Str::slug($title) . '-' . microtime(),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(1000),
    ];
});
