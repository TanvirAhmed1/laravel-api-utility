<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Experience::class, 25)->create()->each(function($experience){
            $experience->make();
        });
    }
}
