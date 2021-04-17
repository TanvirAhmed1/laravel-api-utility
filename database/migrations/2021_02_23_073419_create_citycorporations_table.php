<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitycorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citycorporations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('district_id')->unsigned();
            $table->string('name', 100);
            $table->string('area', 50);
            $table->string('population', 10);
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
        Schema::dropIfExists('citycorporations');
    }
}
