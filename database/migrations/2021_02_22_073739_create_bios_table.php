<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contact_id');
            $table->string('father_name', 250);
            $table->string('mother_name', 250);
            $table->integer('birth_day');
            $table->integer('birth_month');
            $table->integer('birth_year');
            $table->string('birth_place')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('birth_reg_no', 20)->nullable();
            $table->string('nationality', 50)->nullable();
            $table->string('national_id',20)->nullable();
            $table->string('passport_no', 20)->nullable();
            $table->string('driving_license_no', 20)->nullable();
            $table->string('tax_id_no', 20)->nullable();
            $table->string('birth_gender', 10);
            $table->string('identify_as', 10)->nullable(); // global condition
            $table->string('blood_group', 5)->nullable();
            $table->string('religion', 30)->nullable();
            $table->boolean('is_married')->nullable();
            $table->boolean('is_single')->nullable();
            $table->boolean('is_divorced')->nullable();
            $table->boolean('is_widower')->nullable();
            $table->boolean('is_widow')->nullable();
//            $table->integer('siblings')->nullable();
//            $table->integer('children')->nullable();
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
        Schema::dropIfExists('bios');
    }
}
