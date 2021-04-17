<?php

use Illuminate\Database\Seeder;

class CommCallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CommCall::class, 25)->create()->each(function($commcall){
            $commcall->make();
        });
    }
}
