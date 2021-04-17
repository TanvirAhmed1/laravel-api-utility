<?php

use Illuminate\Database\Seeder;

class StageFinancialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageFinancial::class, 25)->create()->each(function($stagefinancial){
            $stagefinancial->make();
        });
    }
}
