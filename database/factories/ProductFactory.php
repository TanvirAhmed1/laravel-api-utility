<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'size' => rand(600, 2500),
        'price' => rand(1000000, 1000000000),
        'floor' => rand(1, 150),
        'bedroom' => rand(1, 10),
        'washroom' => rand(1, 5),
        'balcony' => rand(1, 10),
        'parking' => rand(1, 5),
        'land_area' => rand(400, 5000),
        'no_of_floors' => rand(1, 300),
        'type' => Str::random(5),
        'location' => Str::random(10),
        'name' => $faker->colorName,
        'facing' => $faker->randomElement($array = array ('n','s','e','w')),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
