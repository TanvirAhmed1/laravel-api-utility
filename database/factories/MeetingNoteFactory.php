<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\MeetingNote;

$factory->define(MeetingNote::class, function (Faker $faker) {
    return [
        'meeting_note' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
