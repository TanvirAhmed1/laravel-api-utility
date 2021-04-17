<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_calls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stagecnc_id')->default(5)->nullable();
            $table->dateTime('call_date');
            $table->boolean('call_connected')->default(0);
            $table->string('not_connected_reason', 255)->nullable();
            $table->boolean('call_connected_but_cut')->default(0);
            $table->string('call_cut_reason')->nullable();
            $table->boolean('client_positive')->default(0);
            $table->string('client_negative_remarks', 255)->nullable();
            $table->boolean('got_appointment')->default(0);
            $table->date('appointment_date')->nullable();
            $table->boolean('visit_date_fixed')->default(0);
            $table->unsignedBigInteger('date_fixed_by')->default(10);
            $table->date('visit_date')->nullable();
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
        Schema::dropIfExists('comm_calls');
    }
}
