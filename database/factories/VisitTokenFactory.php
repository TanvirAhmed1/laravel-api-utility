<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\VisitToken;

$factory->define(VisitToken::class, function (Faker $faker) {
    return [
        'token_number' => 'TKT' . $faker->randomNumber($nbDigits = 7, $strict = false)
    ];
});
