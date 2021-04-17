<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Address::class, 25)->create()->each(function($address){
            $address->make();
        });
    }
}
