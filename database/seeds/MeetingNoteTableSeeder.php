<?php

use Illuminate\Database\Seeder;

class MeetingNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\MeetingNote::class, 25)->create()->each(function($meetingnote){
            $meetingnote->make();
        });
    }
}
