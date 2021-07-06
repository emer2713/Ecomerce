<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'url' => rand('/images/1.png','/images/2.png'),
        'imageable_id' => 'App\Prodcut',
        'imageable_id' => rand(1,100)
    ];
});
