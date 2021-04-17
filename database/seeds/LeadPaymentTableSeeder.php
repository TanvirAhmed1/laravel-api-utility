<?php

use Illuminate\Database\Seeder;

class LeadPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\LeadPayment::class, 25)->create()->each(function($leadpayment){
            $leadpayment->make();
        });
    }
}
