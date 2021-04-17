<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\LeadInterestEnq;

$factory->define(LeadInterestEnq::class, function (Faker $faker) {
    return [
        'client_id' => $faker->numberBetween(1, 25),
        'product_id' => $faker->numberBetween(1, 25)
    ];
});
