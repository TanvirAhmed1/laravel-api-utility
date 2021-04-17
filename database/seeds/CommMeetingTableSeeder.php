<?php

use Illuminate\Database\Seeder;

class CommMeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CommMeeting::class, 25)->create()->each(function($commmeeting){
            $commmeeting->make();
        });
    }
}
