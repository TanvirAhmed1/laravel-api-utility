<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\CommCall;

$factory->define(CommCall::class, function (Faker $faker) {
    return [
        //
        'stagecnc_id' => $faker->numberBetween(1, 25),
        'call_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
        'not_connected_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'call_cut_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'client_negative_remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'appointment_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
        'date_fixed_by' => $faker->numberBetween(1, 25),
        'visit_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka')
    ];
});
