<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'url'=>'#',
        'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
