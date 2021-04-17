<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id')->default(10);
            $table->unsignedBigInteger('advisor_id')->default(10)->nullable();
            $table->date('assign_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('lead_source', 255)->default('Website');
            $table->string('lead_status', 20)->default('interested');
            $table->unsignedBigInteger('referred_by')->default(10)->nullable();
            $table->string('referral_person')->default('anonymous')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
