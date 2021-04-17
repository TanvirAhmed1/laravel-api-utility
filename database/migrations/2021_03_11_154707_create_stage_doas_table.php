<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageDoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_doas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lead_id')->default(10);
            $table->unsignedBigInteger('product_id')->default(10);
            $table->boolean('is_doa_completed')->default(0);
            $table->boolean('is_positive')->default(0);
            $table->string('negative_reason', 255)->nullable();
            $table->date('probable_completion_date')->nullable();
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
        Schema::dropIfExists('stage_doas');
    }
}
