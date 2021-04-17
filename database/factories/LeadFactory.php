<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(\App\Models\Lead::class, function (Faker $faker) {
    return [
        "client_id" => rand(1, 25),
        "advisor_id" => rand(1, 25)
    ];
});
