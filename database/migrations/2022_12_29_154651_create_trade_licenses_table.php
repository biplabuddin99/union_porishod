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

            // ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য
            $table->string('business_name');
            $table->string('owner_proprietor');
            $table->string('father_husband');
            $table->string('trade_license_renewal');
            $table->string('business_organization_structure');
            $table->string('business_type');
            $table->string('trade_license_renewal_fee');
            $table->string('business_estimated_capital');
            $table->string('annual_business_tax_levied');
            $table->string('annual_business_tax_collected');
            $table->string('annual_business_tax_due');
            $table->string('holding_tax_update');
            $table->string('vehicle_establishment_holding_no');
            $table->string('street_nm');
            $table->string('village_name');
            $table->string('ward_no');
            $table->string('name_union_parishad');
            $table->string('post_office');
            $table->string('upazila_thana');
            $table->string('district');
            $table->string('image')->nullable()->default('avater.jpg');
            $table->string('nid_image')->nullable();
            $table->string('image_holding')->nullable();
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
