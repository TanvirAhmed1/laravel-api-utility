<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('size')->unsigned();
            $table->bigInteger('price')->unsigned();
            $table->bigInteger('floor')->unsigned()->nullable();
            $table->bigInteger('bedroom')->unsigned()->nullable();
            $table->bigInteger('washroom')->unsigned()->nullable();
            $table->bigInteger('balcony')->unsigned()->nullable();
            $table->bigInteger('lead_id')->unsigned();
            $table->bigInteger('parking')->unsigned()->nullable();
            $table->unsignedInteger('contact_id');
            $table->bigInteger('land_area')->unsigned()->nullable();
            $table->bigInteger('no_of_floors')->unsigned()->nullable();
            $table->boolean('is_sold')->default(0);
            $table->boolean('is_rentable')->default(0);
            $table->string('sold_by')->nullable();
            $table->string('type', 100);
            $table->string('location', 100);
            $table->string('name', 100)->nullable();
            $table->string('facing', 100)->nullable();
            $table->string('description', 100)->nullable();
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
        Schema::dropIfExists('properties');
    }
}
