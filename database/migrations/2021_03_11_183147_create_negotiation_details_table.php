<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegotiationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negotiation_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stagenegotiation id')->default(10);
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_matched')->default(0);
            $table->string('not_matching_reason')->nullable();
            $table->boolean('is_deciding')->default(1);
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
        Schema::dropIfExists('negotiation_details');
    }
}
