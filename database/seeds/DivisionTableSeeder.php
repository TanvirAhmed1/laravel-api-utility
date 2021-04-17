<?php

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Division::class, 25)->create()->each(function($division){
            $division->make();
        });
    }
}
