<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\StageDoa;

$factory->define(StageDoa::class, function (Faker $faker) {
    return [
        'lead_id' =>  $faker->numberBetween(1, 25),
        'product_id' => $faker->numberBetween(1, 25),
        'negative_reason' => $faker->sentence($min='now', $variableNbWords = true),
        'probable_completion_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
    ];
});
