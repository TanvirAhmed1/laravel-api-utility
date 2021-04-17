<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
//$table->unsignedInteger('contact_id');
//$table->string('father_name', 250);
//$table->string('mother_name', 250);
//$table->integer('birth_day');
//$table->integer('birth_month');
//$table->integer('birth_year');
//$table->string('birth_gender', 10);
$factory->define(\App\Models\Bio::class, function (Faker $faker) {
    return [
        'contact_id' => strval(rand(1, 25)),
        'father_name' => $faker->name,
        'mother_name' => $faker->name,
        'birth_day' => rand(1, 30),
        'birth_month' => rand(1, 12),
        'birth_year' => rand(1960, 2000),
        'birth_gender' => Str::random(5)
    ];
});
