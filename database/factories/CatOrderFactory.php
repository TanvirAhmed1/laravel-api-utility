<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(\App\Models\CatOrder::class, function (Faker $faker) {
    return [
        'class_id' => strval(rand(1, 99)),
        'name' => $faker->name
    ];
});
