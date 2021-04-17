<?php

use App\Models\Unioncouncil;
use Illuminate\Database\Seeder;

class UnioncouncilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Unioncouncil::class, 25)->create()->each(function($unioncouncil){
            $unioncouncil->make();
        });
    }
}
