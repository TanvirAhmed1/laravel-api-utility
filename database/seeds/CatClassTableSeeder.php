<?php

use Illuminate\Database\Seeder;

class CatClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatClass::class, 25)->create()->each(function($catclass){
            $catclass->make();
        });
    }
}
