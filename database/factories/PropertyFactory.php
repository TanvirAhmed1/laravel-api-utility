<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;
use Illuminate\Support\Str;


$factory->define(\App\Models\Property::class, function (Faker $faker) {
    return [
        'size' => rand(600, 2500),
        'price' => rand(1000000, 10000000),
        'lead_id' => rand(1, 25),
        'contact_id' => rand(1, 25),
        'type' => Str::random(5),
        'location' => Str::random(10),
    ];
});
