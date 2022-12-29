<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('proprietor_name');
            $table->string('father_husband');
            $table->string('estimated_price');
            $table->string('phone');
            $table->date('date');
            $table->string('financial_year');
            $table->string('organization_details');
            $table->string('institution_address');
            $table->string('id_no');
            $table->string('earned_free');
            $table->string('village_road');
            $table->string('ward_no_id');
            $table->string('district_id');
            $table->string('post_office');
            $table->string('division_id');
            $table->string('thana_id');
            $table->string('image');
            $table->string('id_no_img');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('trade_licenses');
    }
};
