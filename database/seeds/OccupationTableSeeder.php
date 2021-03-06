<?php

use Illuminate\Database\Seeder;

class OccupationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Occupation::class, 25)->create()->each(function($occupation){
            $occupation->make();
        });
    }
}
