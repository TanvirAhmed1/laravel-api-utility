<?php

use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Village::class, 25)->create()->each(function($village){
            $village->make();
        });
    }
}
