<?php

use Illuminate\Database\Seeder;

class StageNegotitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageNegotiation::class, 25)->create()->each(function($stagenegotiation){
            $stagenegotiation->make();
        });
    }
}
