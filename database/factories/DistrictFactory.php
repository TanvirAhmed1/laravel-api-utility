<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\District;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(District::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'area' => Str::random(5),
        'population' => Str::random(5),
        'division_id' => strval(rand(1, 99))
    ];
});
