<?php

use Illuminate\Database\Seeder;

class CatDomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatDomain::class, 25)->create()->each(function($catdomain){
            $catdomain->make();
        });
    }
}
