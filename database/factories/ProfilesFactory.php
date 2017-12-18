<?php

use Faker\Generator as Faker;

$factory->define(\Pichai\Profiles::class, function (Faker $faker) {
    return [
        //
        'urls' => $faker->imageUrl($width = 640, $height = 480),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'caption' => $faker->text($maxNbChars = 200),
        'alt_text' => $faker->text($maxNbChars = 200),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'last_year' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
