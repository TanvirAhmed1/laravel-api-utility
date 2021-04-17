<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contact_id')->nullable();
            $table->unsignedInteger('organization_id')->nullable();
            $table->string('flat_no', 10)->nullable();
            $table->string('house_number', 10);
            $table->string('building_name', 50)->nullable();
            $table->string('road_no', 10)->nullable();
            $table->string('road_name',50)->nullable();
            $table->string('block_name', 50)->nullable();
            $table->string('block_no', 50)->nullable();
            $table->string('sector_name', 50)->nullable();
            $table->string('sector_no', 50)->nullable();
            $table->string('area_name', 50)->nullable();
            $table->string('area_name_extension', 50)->nullable();
            $table->string('section_no', 50)->nullable();
            $table->string('post_office', 50);
            $table->string('postal_code', 50);
            $table->string('police_station', 50);
            $table->string('sub_district', 50)->nullable();
            $table->string('district', 50);
            $table->string('division', 50);
            $table->string('country', 50);
            $table->string('country_code', 50)->nullable();
            $table->boolean('is_present')->default(0);
            $table->boolean('is_permanent')->default(0);
            $table->boolean('is_business')->default(0);
            $table->boolean('is_active')->default(1);
            $table->boolean('display_address')->default(1);
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('addresses');
    }
}
