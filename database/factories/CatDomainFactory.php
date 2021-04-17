<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\CatDomain;

$factory->define(CatDomain::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
