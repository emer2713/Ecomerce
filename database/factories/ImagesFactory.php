<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Image;

use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'url' => $faker->randomElement(['/images/1.png', '/images/2.png', '/images/3.png','/images/4.png','/images/5.png', '/images/6.png', '/images/7.png','/images/8.png','/images/9.png']),
        'imageable_type' => $faker->randomElement(['App\Product', 'App\Carousel', ]),
        'imageable_id' => rand(1,100)
    ];
});
