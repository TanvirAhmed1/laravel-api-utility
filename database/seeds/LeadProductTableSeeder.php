<?php

use Illuminate\Database\Seeder;

class LeadProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\LeadProduct::class, 25)->create()->each(function($leadproduct){
            $leadproduct->make();
        });
    }
}
