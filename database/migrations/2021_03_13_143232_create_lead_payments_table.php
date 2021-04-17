<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->unsignedBigInteger('stagevisit_id')->nullable();
            $table->unsignedBigInteger('stagenegotiation_id')->nullable();
            $table->unsignedBigInteger('stagefinancials_id')->nullable();
            $table->unsignedBigInteger('stagepayment_id')->nullable();
            $table->double('paid_amount')->default(0);
            $table->date('payment_date')->nullable();
            $table->unsignedBigInteger('received_by')->default(10);
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
        Schema::dropIfExists('lead_payments');
    }
}
