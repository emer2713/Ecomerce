<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'url' => '/images/'.$faker->image( $width = 1200, $height = 400),
        'imageable' => rand(1,100)
    ];
});
