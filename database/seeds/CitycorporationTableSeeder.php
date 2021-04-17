<?php

use App\Models\Citycorporation;
use Illuminate\Database\Seeder;

class CitycorporationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Citycorporation::class, 25)->create()->each(function($citycorporation){
            $citycorporation->make();
        });
    }
}
