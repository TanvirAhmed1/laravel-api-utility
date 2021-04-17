<?php

use App\Models\ProductFeature;
use Illuminate\Database\Seeder;

class ProductFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductFeature::class, 25)->create()->each(function($occupation){
            $occupation->make();
        });
    }
}
