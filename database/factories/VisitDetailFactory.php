<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\VisitDetail;

$factory->define(VisitDetail::class, function (Faker $faker) {
    return [
        'stagevisit_id' => $faker->numberBetween(1, 25),
        'visit_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
        'additional_visit_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
        'client_negative_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'probable_payment_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
    ];
});
