<?php

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(District::class, 25)->create()->each(function($district){
            $district->make();
        });
    }
}
