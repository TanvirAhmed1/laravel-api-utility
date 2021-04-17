<?php

use Illuminate\Database\Seeder;

class CatGenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatGenus::class, 25)->create()->each(function($catgenus){
            $catgenus->make();
        });
    }
}
