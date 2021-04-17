<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Referee;
use Faker\Generator as Faker;

$factory->define(Referee::class, function (Faker $faker) {
    return [
        'contact_id' => rand(1, 25),
        'name' => $faker->name
    ];
});
