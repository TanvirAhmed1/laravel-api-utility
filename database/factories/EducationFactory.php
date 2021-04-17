<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
//$table->bigIncrements('id');
//$table->unsignedInteger('bio_id');
//$table->date('certificate_date')->nullable();
//$table->integer('completion_year');
//$table->float('result', 4, 2);
//$table->timestamps();
//'division_id' => strval(rand(1, 99))
$factory->define(\App\Models\Education::class, function (Faker $faker) {
    return [
        //
        'contact_id' => strval(rand(1, 25)),
        'certificate_date' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
        'completion_year' => strval(rand(1, 10))
    ];
});
