<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;

class CreateCommMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stagemnm_id')->default(10);
            $table->boolean('meeting_done')->default(0);
            $table->boolean('meeting_postponed')->default(0);
            $table->dateTime('new_meeting_date')->nullable();
            $table->boolean('meeting_cancelled')->default(0);
            $table->string('meeting_cancel_reason', 255)->nullable();
            $table->boolean('product_match')->default(0);
            $table->string('not_matching_remarks', 255)->nullable();
            $table->boolean('client_positive')->default(1);
            $table->string('client_positive_remarks', 255)->nullable();
            $table->string('client_negative_reason',255)->nullable();
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
        Schema::dropIfExists('comm_meetings');
    }
}
