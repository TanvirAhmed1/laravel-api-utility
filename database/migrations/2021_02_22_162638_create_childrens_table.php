<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('bio_id');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_reg_no')->nullable();
            $table->string('national_id_no')->nullable();
            $table->boolean('is_studying')->default(0);
            $table->boolean('is_studying_abroad')->default(0);
            $table->string('study_grade')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('study_location')->nullable();
//            $table->string('institute_name')->nullable();
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
        Schema::dropIfExists('childrens');
    }
}
