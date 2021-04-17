<?php

use Illuminate\Database\Seeder;

class StagePaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StagePayment::class, 25)->create()->each(function($stagepayment){
            $stagepayment->make();
        });
    }
}
