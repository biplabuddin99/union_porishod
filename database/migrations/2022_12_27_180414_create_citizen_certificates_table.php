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
            $table->string('father_name')->nullable();
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

            // নাগরিক সনদ আবেদনের অন্যান্য তথ্য
            $table->string('permanent_resident')->nullable();
            $table->string('citizen_bangladesh')->nullable();
            $table->string('voters_union')->nullable();
            $table->string('involved_anti_state')->nullable();
            $table->string('update_holdingtax')->nullable();
            $table->string('house_holding_no')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('union_id')->nullable();
            $table->string('post_office')->nullable();
            $table->string('upazila_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('holding_image')->nullable();
            $table->string('image_birth_certificate')->nullable();
            $table->string('citizen_certificate_fee')->nullable();
            $table->string('approval_date')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('status')->default(0);
            $table->integer('approved_by')->nullable();
            $table->integer('chairman_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
