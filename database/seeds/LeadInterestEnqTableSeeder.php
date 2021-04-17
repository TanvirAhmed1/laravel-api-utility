<?php

use Illuminate\Database\Seeder;

class LeadInterestEnqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\LeadInterestEnq::class, 25)->create()->each(function($leadintenq){
            $leadintenq->make();
        });
    }
}
