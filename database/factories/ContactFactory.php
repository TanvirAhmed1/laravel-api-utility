<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\Contact::class, function (Faker $faker) {
    return [
        'name' => Str::random(5),
        'email' => Str::random(7),
        'phone' => Str::random(11)
    ];
});
