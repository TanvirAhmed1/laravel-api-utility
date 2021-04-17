<?php

use App\Models\Subdistrict;
use Illuminate\Database\Seeder;

class SubdistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subdistrict::class, 25)->create()->each(function($subdistrict){
            $subdistrict->make();
        });
    }
}
