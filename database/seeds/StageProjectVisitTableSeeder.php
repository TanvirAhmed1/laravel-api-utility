<?php

use Illuminate\Database\Seeder;

class StageProjectVisitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageProjectVisit::class, 25)->create()->each(function($stageprojectvisit){
            $stageprojectvisit->make();
        });
    }
}
