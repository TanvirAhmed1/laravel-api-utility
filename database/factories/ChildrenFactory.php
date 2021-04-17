<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Children;
use Faker\Generator as Faker;

$factory->define(Children::class, function (Faker $faker) {
    return [
        'bio_id' => rand(1, 25),
        'name' => $faker->name
    ];
});
