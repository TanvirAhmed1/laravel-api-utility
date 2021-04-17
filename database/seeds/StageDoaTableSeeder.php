<?php

use Illuminate\Database\Seeder;

class StageDoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageDoa::class, 25)->create()->each(function($stagedoa){
            $stagedoa->make();
        });
    }
}
