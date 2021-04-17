<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
//$table->bigIncrements('id');
//$table->unsignedInteger('contact_id');
//$table->integer('experience_years');
//$table->string('position', 20)->nullable();
//$table->string('company_name', 20)->nullable();
//$table->string('experience_sector', 20);
//$table->timestamps();
$factory->define(\App\Models\Experience::class, function (Faker $faker) {
    return [
        'contact_id' => strval(rand(1, 25)),
        'experience_years' => strval(rand(1, 25)),
        'position' => Str::random(10),
        'company_name' => Str::random(10),
        'experience_sector' => Str::random(10)
    ];
});
