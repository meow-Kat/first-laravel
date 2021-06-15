<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'price' => $faker->numberBetween($min = 25, $max = 400),
        'discount' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0.01, $max = 1),
        'text' => $faker->realText(30),
        'img' => $faker->imageUrl($width = 300, $height = 200)
    ];
});
