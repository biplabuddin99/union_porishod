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
        Schema::create('attestation_familymembers', function (Blueprint $table) {
            $table->id();
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

            // ্ওয়ারিশান আবেদনের অন্যান্য তথ্য
            $table->string('familyhead_name')->nullable();
            $table->string('father_husband')->nullable();
            $table->string('attesteation_mother_name')->nullable();
            $table->integer('total_family_members')->nullable();
            $table->string('house_holding_no')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('union_id')->nullable();
            $table->string('post_office')->nullable();
            $table->string('upazila_id')->nullable();
            $table->string('district_id')->nullable();
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
        Schema::dropIfExists('attestation_familymembers');
    }
};
