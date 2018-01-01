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
        'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
    ];
});
