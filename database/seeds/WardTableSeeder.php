<?php

use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ward::class, 25)->create()->each(function($ward){
            $ward->make();
        });
    }
}
