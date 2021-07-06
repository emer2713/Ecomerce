<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->name;
    $slug = Str::slug($title);

    return [
        'name' => $title,
        'slug' => $slug,
        'module' 	=> rand(0,1),
        'body' => $faker->text(500),
        'file' 			=> $faker->imageUrl($width = 1200, $height = 400),
    ];
});
