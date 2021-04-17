<?php

use Illuminate\Database\Seeder;

class CatKingdomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatKingdom::class, 25)->create()->each(function($catkingdom){
            $catkingdom->make();
        });
    }
}
