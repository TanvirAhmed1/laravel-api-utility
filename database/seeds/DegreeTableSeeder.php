<?php

use App\Models\Degree;
use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Degree::class, 25)->create()->each(function($country){
            $country->make();
        });
    }
}
