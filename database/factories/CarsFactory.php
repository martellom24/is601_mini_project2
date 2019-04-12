<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {

    // custom variables for make and year
    $cars = array( "ford", "honda", "toyota" );
    $randIndex = array_rand($cars);
    $randYear = rand(1990, 2018);

    return [
        'make' => $cars[$randIndex],
        'model' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'year' => $randYear,
    ];
});
