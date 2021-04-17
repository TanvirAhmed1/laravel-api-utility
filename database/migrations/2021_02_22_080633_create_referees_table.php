<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefereesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contact_id');
            $table->string('name');
            $table->boolean('is_occupied')->default(1);
            $table->string('occupation_type')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('organization')->nullable();
            $table->boolean('is_female')->default(0);
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
        Schema::dropIfExists('referees');
    }
}
