<?php

use Illuminate\Database\Seeder;

class StageMnmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StageMnm::class, 25)->create()->each(function($stagemnm){
            $stagemnm->make();
        });
    }
}
