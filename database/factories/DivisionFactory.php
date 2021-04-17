<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Division;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Division::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'area' => Str::random(5),
        'population' => Str::random(5)
    ];
});
