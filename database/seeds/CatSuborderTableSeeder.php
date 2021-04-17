<?php

use Illuminate\Database\Seeder;

class CatSuborderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatSuborder::class, 25)->create()->each(function($catsuborder){
            $catsuborder->make();
        });
    }
}
