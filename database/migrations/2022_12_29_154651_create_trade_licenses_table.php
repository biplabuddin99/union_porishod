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
            $table->string('trade_date')->nullable();
            $table->string('head_institution')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('birth_registration_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('bank_acc')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('house_holding_number')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->integer('ward_id')->nullable();
            $table->string('post_office')->nullable();
            $table->integer('union_id')->nullable();
            $table->string('upazila_id')->nullable();
            $table->string('district_id')->nullable();

            // ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য
            $table->string('business_name')->nullable();
            $table->string('type_ownership_organization')->nullable();
            $table->string('e_tin_number')->nullable();
            $table->string('business_organization_type')->nullable();
            $table->integer('estimated_capital_business')->nullable();
            $table->string('business_type')->nullable();
            $table->string('institution_holding_number')->nullable();
            $table->string('business_post_office')->nullable();
            $table->string('business_district_id')->nullable();
            $table->string('business_upazila_id')->nullable();
            $table->string('business_union_id')->nullable();
            $table->string('business_ward_id')->nullable();
            $table->string('business_village_name')->nullable();
            $table->string('business_street_nm')->nullable();
            $table->string('image')->nullable()->default('avater.jpg');
            $table->string('nid_image')->nullable();
            $table->string('image_holding')->nullable();
            $table->string('tradelicense_renewal_year')->nullable();
            $table->string('trade_license_renewal_fee')->nullable();
            $table->string('annual_withholding_tax')->nullable();
            $table->string('signboard_tax')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('trade_license_fee')->nullable();
            $table->string('approval_date')->nullable();
            $table->string('cancel_reson')->nullable();
            $table->string('status')->default(0);
            $table->integer('approved_by')->nullable();
            $table->integer('chairman_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
