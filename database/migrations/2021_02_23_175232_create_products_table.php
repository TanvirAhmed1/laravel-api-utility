<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('size')->unsigned();
            $table->double('price')->unsigned();
            $table->integer('floor')->unsigned()->nullable();
            $table->integer('bedroom')->unsigned();
            $table->integer('washroom')->unsigned();
            $table->integer('balcony')->unsigned()->nullable();
            $table->integer('parking')->unsigned()->nullable();
            $table->double('land_area')->unsigned()->nullable();
            $table->integer('no_of_floors')->unsigned()->nullable();
            $table->string('type', 100);
            $table->string('location', 100);
            $table->string('name', 100)->default('Floorfly Project');
            $table->string('facing', 100)->nullable();
            $table->string('description', 200)->nullable();
//            $table->string('name', 100);
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
        Schema::dropIfExists('products');
    }
}
