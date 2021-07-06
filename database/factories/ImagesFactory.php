<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Image;

use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'url' => rand('/images/1.png','/images/2.png','/images/3.png'),
        'imageable_type' => 'App\Product',
        'imageable_id' => rand(1,100)
    ];
});
