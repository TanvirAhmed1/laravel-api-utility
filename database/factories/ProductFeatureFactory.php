<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ProductFeature;
$factory->define(ProductFeature::class, function (Faker $faker) {
    return [
        'product_id' => rand(1, 25),
        'servant_bed' => rand(0, 1),
        'front_yard' => rand(0, 1),
        'reception' => rand(0, 1),
        'substation' => rand(0, 1),
        'kitchen_cabinet' => rand(0, 1),
        'cctv' => rand(0, 1),
        'laundry_room' => rand(0, 1),
        'splash_pool' => rand(0, 1),
        'rooftop_garden' => rand(0, 1),
        'lift' => rand(0, 1),
        'corner_plot' => rand(0, 1),
        'swimming_pool' => rand(0, 1),
        'gym' => rand(0, 1),
        'generator' => rand(0, 1),
        'kitchen_veranda' => rand(0, 1),
        'guest_lobby' => rand(0, 1),
        'guest_parking' => rand(0, 1),
        'terrace' => rand(0, 1)
    ];
});
