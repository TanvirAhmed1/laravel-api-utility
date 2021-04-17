<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stagevisit_id')->default(10);
            $table->unsignedBigInteger('meeting_id')->default(10)->nullable();
            $table->unsignedBigInteger('call_id')->default(10)->nullable();
            $table->unsignedBigInteger('lead_id')->default(10);
            $table->unsignedBigInteger('product_id')->default(10);
            $table->date('visit_date')->nullable();
            $table->boolean('is_additional_visit')->default(0);
            $table->date('additional_visit_date')->nullable();
            $table->boolean('is_client_positive')->default(0);
            $table->string('client_negative_reason', 255)->nullable();
            $table->boolean('is_client_negotiating')->default(0);
            $table->boolean('paid')->default(0);
            $table->boolean('is_agreed_to_pay')->default(0);
            $table->date('probable_payment_date')->nullable();
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
        Schema::dropIfExists('visit_details');
    }
}
