<?php

use Illuminate\Database\Seeder;

class VisitTokenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\VisitToken::class, 25)->create()->each(function($visittoken){
            $visittoken->make();
        });
    }
}
