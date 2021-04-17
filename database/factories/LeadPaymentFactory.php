<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\LeadPayment;

$factory->define(LeadPayment::class, function (Faker $faker) {
    return [
        'paid_amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000000),
        'payment_date' => $faker->dateTimeAD($min='now', $timezone = 'Asia/Dhaka')
    ];
});
