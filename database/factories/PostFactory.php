<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => Str::random(10),
        'description' => Str::random(10),
        'slug' => Str::random(10),
        'address' => Str::random(10),
        'thumbnail' => 'http://127.0.0.1:8000/images/home-img-01-442-280.jpg',
        'price' => 10000,
        'cate_id' => 4,
    ];
});
