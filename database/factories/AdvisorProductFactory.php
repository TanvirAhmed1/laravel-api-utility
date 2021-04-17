<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\AdvisorProduct;

$factory->define(AdvisorProduct::class, function (Faker $faker) {
    return [
        'advisor_id' => $faker->numberBetween(1, 25),
        'product_id' => $faker->numberBetween(1, 25)
    ];
});
