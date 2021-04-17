<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\StageNegotiation;

$factory->define(StageNegotiation::class, function (Faker $faker) {
    return [
        'lead_id' => $faker ->numberBetween(1, 25),
        'product_id'=> $faker->numberBetween(1, 25),
        'negative_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
