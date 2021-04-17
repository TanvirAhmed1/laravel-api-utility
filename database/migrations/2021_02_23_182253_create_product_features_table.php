<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->default(13);
            $table->boolean('servant_bed')->default(0);
            $table->boolean('front_yard')->default(0);
            $table->boolean('reception')->default(0);
            $table->boolean('substation')->default(0);
            $table->boolean('kitchen_cabinet')->default(0);
            $table->boolean('cctv')->default(0);
            $table->boolean('laundry_room')->default(0);
            $table->boolean('splash_pool')->default(0);
            $table->boolean('rooftop_garden')->default(0);
            $table->boolean('lift')->default(0);
            $table->boolean('corner_plot')->default(0);
            $table->boolean('swimming_pool')->default(0);
            $table->boolean('gym')->default(0);
            $table->boolean('generator')->default(0);
            $table->boolean('kitchen_veranda')->default(0);
            $table->boolean('guest_lobby')->default(0);
            $table->boolean('guest_parking')->default(0);
            $table->boolean('terrace')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_features');
    }
}
