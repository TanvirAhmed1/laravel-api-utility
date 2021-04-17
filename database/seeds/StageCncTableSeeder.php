<?php

use Illuminate\Database\Seeder;

class StageCncTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageCnc::class, 25)->create()->each(function($stagecnc){
            $stagecnc->make();
        });
    }
}
