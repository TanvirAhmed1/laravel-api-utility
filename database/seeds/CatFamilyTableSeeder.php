<?php

use Illuminate\Database\Seeder;

class CatFamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatFamily::class, 25)->create()->each(function($catfamily){
            $catfamily->make();
        });
    }
}
