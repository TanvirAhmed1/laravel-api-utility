<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\StageFinancial;

$factory->define(StageFinancial::class, function (Faker $faker) {
    return [
        'lead_id' => $faker->numberBetween(1, 25),
        'product_id' => $faker->numberBetween(1, 25),
        'proposal_refusal_remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
