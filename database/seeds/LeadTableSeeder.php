<?php

use Illuminate\Database\Seeder;

class LeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Lead::class, 25)->create()->each(function($leadproduct){
            $leadproduct->make();
        });
    }
}
