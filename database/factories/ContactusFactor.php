<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contactus;
use Faker\Generator as Faker;

$factory->define(Contactus::class, function (Faker $faker) {
    return [
        // 產出假資料需要從播種機產
        // 有專有格式
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        //                      30個字 ↓
        'content' => $faker->realText(30)
    ];
});
