<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Citycorporation;
use Illuminate\Support\Str;

$factory->define(Citycorporation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'area' => Str::random(5),
        'population' => Str::random(5),
        'district_id' => strval(rand(1, 99))
    ];
});
