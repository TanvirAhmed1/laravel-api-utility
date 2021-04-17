<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\LeadProduct;

$factory->define(LeadProduct::class, function (Faker $faker) {
    return [
        'lead_id' => $faker->numberBetween(1, 25),
        'product_id' => $faker->numberBetween(1, 25)
    ];
});
