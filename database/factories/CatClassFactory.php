<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\CatClass;

$factory->define(CatClass::class, function (Faker $faker) {
    return [
        'kingdom_id' => strval(rand(1, 99)),
        'name' => $faker->name
    ];
});
