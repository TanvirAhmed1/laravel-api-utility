<?php

use Illuminate\Database\Seeder;

class VisitDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\VisitDetail::class, 25)->create()->each(function($visitdetail){
            $visitdetail->make();
        });
    }
}
