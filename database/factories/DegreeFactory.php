<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Degree;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Degree::class, function (Faker $faker) {
    return [
        'education_id' => strval(rand(1, 25)),
        'degree_title' => Str::random(5),
        'duration' => rand(1,6)
    ];
});
