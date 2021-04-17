<?php

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Municipality::class, 25)->create()->each(function($municipality){
            $municipality->make();
        });
    }
}
