<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Organization::class, 25)->create()->each(function($occupation){
            $occupation->make();
        });
    }
}
