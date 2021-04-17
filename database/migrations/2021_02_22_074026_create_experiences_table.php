<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contact_id');
            $table->integer('experience_years');
            $table->string('position', 20)->nullable();
            $table->string('company_name', 20)->nullable();
            $table->string('experience_sector', 20);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('skill_summery',100)->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
