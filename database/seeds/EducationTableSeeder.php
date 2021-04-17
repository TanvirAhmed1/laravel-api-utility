<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Education::class, 25)->create()->each(function($education){
            $education->make();
        });
    }
}
