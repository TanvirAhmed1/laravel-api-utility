<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'flat_no' => Str::random(4) . strval(rand(1,999)),
        'house_number' => Str::random(2) . strval(rand(1,999)),
        'building_name' => $faker->name . ' Villa',
        'road_no' => Str::random(2) . strval(rand(1,999)),
        'road_name' => $faker->name . ' Road',
        'area_name' => $faker->name . ' Area',
        'area_name_extension' => $faker->name . ' Extended Area',
        'post_office' => $faker->name,
        'postal_code' => strval(rand(1, 99999)),
        'police_station' => $faker->name . ' Thana',
        'sub_district' => $faker->name . ' Upazilla',
        'district' => $faker->name . ' Zilla',
        'division' => $faker->name . ' Div',
        'country' => $faker->name . ' Country',
        'country_code' => $faker->name . ' CC',
        'created_by' => rand(0, 25),
        'updated_by' => rand(0, 25),
    ];
});
