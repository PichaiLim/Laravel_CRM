<?php

use Faker\Generator as Faker;
use Pichai\Admins;

$factory->define(Admins::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('passwd'),
        'remember_token' => str_random(10),
    ];
});
