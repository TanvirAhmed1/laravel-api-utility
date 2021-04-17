<?php

use Illuminate\Database\Seeder;

class CatOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatOrder::class, 25)->create()->each(function($catorder){
            $catorder->make();
        });
    }
}
