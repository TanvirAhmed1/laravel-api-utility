<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\CommMeeting;

$factory->define(CommMeeting::class, function (Faker $faker) {
    return [
        'stagemnm_id' => $faker->numberBetween(1, 25),
        'new_meeting_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka'),
        'meeting_cancel_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'not_matching_remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'client_positive_remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'client_negative_reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'visit_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka')
    ];
});
