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
        Schema::create('citizen_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('holding_date')->nullable();
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
            $table->string('government_facilities')->nullable();

            // নাগরিক সনদ আবেদনের অন্যান্য তথ্য
            $table->string('permanent_resident');
            $table->string('citizen_bangladesh')->nullable();
            $table->string('voters_union')->nullable();
            $table->string('involved_anti_state')->nullable();
            $table->string('update_holdingtax');
            $table->string('house_holding_no');
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('name_union_parishad')->nullable();
            $table->string('post_office')->nullable();
            $table->string('upazila_thana')->nullable();
            $table->string('district')->nullable();
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('holding_image')->nullable();
            $table->string('image_birth_certificate')->nullable();
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
        Schema::dropIfExists('citizen_certificates');
    }
};
