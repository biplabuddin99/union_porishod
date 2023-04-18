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
        Schema::create('warishans', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('holding_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('head_household')->nullable();
            $table->string('husband_wife')->nullable();
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
            $table->string('freedom_fighter')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('digital_devices')->nullable();
            $table->string('government_facilities')->nullable();

            // ্ওয়ারিশান আবেদনের অন্যান্য তথ্য
            $table->string('warishan_person_name')->nullable();
            $table->string('father_husband')->nullable();
            $table->string('warishan_mother_name')->nullable();
            $table->string('date_death_warishan')->nullable();
            // $table->integer('update_holding_tax')->nullable();
            // $table->integer('wife_number')->nullable();
            // $table->integer('son')->nullable();
            // $table->integer('daughter')->nullable();
            $table->integer('total_warishan_members')->nullable();
            $table->string('house_holding_no')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('post_office')->nullable();
            $table->string('district_id')->nullable();
            $table->string('upazila_id')->nullable();
            $table->string('union_id')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('holding_image')->nullable();
            $table->string('image')->nullable();
            $table->string('image_death_certificate')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warishans');
    }
};
