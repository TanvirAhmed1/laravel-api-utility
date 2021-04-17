<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_financials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lead_id')->default(10);
            $table->unsignedBigInteger('product_id')->default(10);
            $table->boolean('is_proposal_sent')->default(0);
            $table->boolean('is_proposal_accepted')->default(0);
            $table->string('proposal_refusal_remarks', 255)->nullable();
            $table->boolean('is_deciding')->default(1);
            $table->boolean('is_positive')->default(0);
            $table->boolean('is_paid')->default(0);
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
        Schema::dropIfExists('stage_financials');
    }
}
