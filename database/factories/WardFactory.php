<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ward;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Ward::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'area' => Str::random(5),
        'population' => Str::random(5),
        'citycorporation_id' => strval(rand(1, 99)),
        'municipality_id' => strval(rand(1, 99))
    ];
});
