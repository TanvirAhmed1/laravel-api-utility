<?php

use Illuminate\Database\Seeder;

class AdvisorProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\AdvisorProduct::class, 25)->create()->each(function($address){
            $address->make();
        });
    }
}
