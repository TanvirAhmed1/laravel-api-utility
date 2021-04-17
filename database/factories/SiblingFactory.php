<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sibling;
use Faker\Generator as Faker;
//$table->bigIncrements('id');
//$table->unsignedInteger('bio_id');
//$table->string('name');
$factory->define(Sibling::class, function (Faker $faker) {
    return [
        'bio_id' => rand(1, 25),
        'name' => $faker->name
    ];
});
