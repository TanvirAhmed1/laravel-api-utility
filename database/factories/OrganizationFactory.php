<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Organization::class, function (Faker $faker) {
    return [
        'name' => \Illuminate\Support\Str::random(5)
    ];
});
