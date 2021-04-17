<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\LeadEnquiryDetail;

$factory->define(LeadEnquiryDetail::class, function (Faker $faker) {
    return [
        'lead_interest_enq_id' => $faker->numberBetween(1, 25),
        'enquiry_detail' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
