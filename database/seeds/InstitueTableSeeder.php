<?php

use Illuminate\Database\Seeder;

class InstitueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Institute::class, 25)->create()->each(function($institute){
            $institute->make();
        });
    }
}
