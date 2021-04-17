<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnioncouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unioncouncils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('subdistrict_id')->unsigned();
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
        Schema::dropIfExists('unioncouncils');
    }
}
