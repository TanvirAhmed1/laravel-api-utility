<?php

use App\Models\Sibling;
use Illuminate\Database\Seeder;

class SiblingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sibling::class, 25)->create()->each(function($sibling){
            $sibling->make();
        });
    }
}
