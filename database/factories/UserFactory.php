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

$factory->define(PichaiLim\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,        
        'password' => $password ?: $password = bcrypt('passwd'),
        'address'=> $faker->address,
        'phone'=>$facker->tollFreePhoneNumber,
        'remember_token' => str_random(10),
    ];
});
