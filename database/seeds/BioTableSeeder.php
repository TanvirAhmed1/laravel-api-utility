<?php

use Illuminate\Database\Seeder;

class BioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Bio::class, 25)->create()->each(function($bio){
            $bio->make();
        });
    }
}
