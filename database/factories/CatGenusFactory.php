<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(\App\Models\CatGenus::class, function (Faker $faker) {
    return [
        'family_id' => strval(rand(1, 99)),
        'name' => $faker->name
    ];
});
