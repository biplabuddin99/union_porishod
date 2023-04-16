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
        Schema::create('holdings', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('holding_date')->nullable();
            $table->string('head_household')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('father_name')->nullable();
            $table->string('freedom_fighter')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('birth_registration_id')->nullable();
            $table->string('religion')->nullable();
            $table->string('phone')->nullable();
            $table->string('edu_qual')->nullable();
            $table->string('email')->nullable();
            $table->string('source_income')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('internet_connection')->nullable();
            $table->integer('tube_well')->nullable();
            $table->string('disline_connection')->nullable();
            $table->integer('paved_bathroom')->nullable();
            $table->string('arsenic_free')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('digital_devices')->nullable();
            $table->string('government_facilities')->nullable();

            // হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য
            $table->string('residence_type')->nullable();
            $table->string('house_room')->nullable();
            $table->string('family_status')->nullable();
            $table->string('main_source_income')->nullable();
            $table->string('percentage_house_land')->nullable();
            $table->string('percentage_cultivated_land')->nullable();
            $table->string('estimated_value_house')->nullable();
            $table->string('tax_levied_annually_house')->nullable();
            // $table->string('annual_tax_collected_house')->nullable();
            // $table->string('annual_house_tax_arrears')->nullable();
            // আবেদনকারীর স্থায়ী ঠিকানা সমূহ
            $table->string('house_holding_no')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->integer('ward_id')->nullable();
            $table->integer('union_id')->nullable();
            $table->string('post_office')->nullable();
            $table->integer('upazila_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('birth_registration_image')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('holdings');
    }
};
