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
        Schema::create('permanent_residents', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('apply_date')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('birth_registration_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('freedom_fighter')->nullable();
            $table->string('edu_qual')->nullable();
            $table->string('source_income')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('digital_devices')->nullable();
            $table->string('government_facilities')->nullable();
            $table->integer('bank_acc')->nullable();

            //আবেদনের অন্যান্য তথ্য
            $table->string('permanent_resident')->nullable();
            $table->string('citizen_bangladesh')->nullable();
            $table->string('voters_union')->nullable();
            $table->string('voter_no')->nullable();
            $table->string('involved_anti_state')->nullable();
            $table->string('house_holding_no')->nullable();
            $table->string('post_office')->nullable();
            $table->string('district_id')->nullable();
            $table->string('upazila_id')->nullable();
            $table->string('union_id')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('village_name')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('digital_birth_certificate')->nullable();
            $table->string('certificate_fee')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('as_i_know')->nullable();
            $table->string('of_the_union')->nullable();
            $table->string('approval_date')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('status')->default(0);
            $table->integer('chairman_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('approved_by')->nullable();
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
        Schema::dropIfExists('permanent_residents');
    }
};
