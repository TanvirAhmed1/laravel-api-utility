<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
$factory->define(\App\Models\Occupation::class, function (Faker $faker) {
    return [
        'contact_id' => rand(1, 25),
        'name' => \Illuminate\Support\Str::random(5)
    ];
});
