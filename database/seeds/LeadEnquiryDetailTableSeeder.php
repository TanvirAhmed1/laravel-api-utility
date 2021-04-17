<?php

use Illuminate\Database\Seeder;

class LeadEnquiryDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\LeadEnquiryDetail::class, 25)->create()->each(function($leadenqdetail){
            $leadenqdetail->make();
        });
    }
}
