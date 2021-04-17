<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(\App\Models\CatFamily::class, function (Faker $faker) {
    return [
        'suborder_id' => strval(rand(1, 99)),
        'name' => $faker->name
    ];
});
