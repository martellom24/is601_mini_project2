<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {

    return [
        'make' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'model' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'year' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
