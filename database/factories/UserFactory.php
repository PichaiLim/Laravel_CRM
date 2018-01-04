<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Pichai\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('passwd'),
        'address' => $faker->streetAddress,
        'phone' => $faker->tollFreePhoneNumber,
        'gender'=>$faker->randomElement(['m','f','']),
        'remember_token' => str_random(10),
    ];
});
