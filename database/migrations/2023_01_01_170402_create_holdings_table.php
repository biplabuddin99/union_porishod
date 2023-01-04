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
            $table->string('form_no');
            $table->date('holding_date');
            $table->string('head_household');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('husband_wife');
            $table->string('new_holding_no');
            $table->string('previous_holding_no');
            $table->string('village');
            $table->string('ward_no');
            $table->date('birth_date');
            $table->string('voter_id_no');
            $table->string('phone');
            $table->string('email');
            $table->string('marital_status');
            $table->string('gender');
            $table->boolean('digital_birth_cer');
            $table->boolean('paved_bathroom');
            $table->boolean('expatriate');
            $table->boolean('power_connection');
            $table->boolean('tube_well');
            $table->boolean('bank');
            $table->string('edu_qual');
            $table->string('family_male');
            $table->string('family_female');
            $table->string('family_total');
            $table->string('single_joint_family');
            $table->string('religion');
            $table->string('mobile_bank');
            $table->string('government_facilities');
            $table->string('family_status');
            $table->string('digital_devices');
            $table->string('telecommunications');
            $table->string('source_income');
            $table->string('business_taxes');
            $table->string('business_amount_taxes');
            $table->string('sources_other_taxes');
            $table->string('other_taxes_amount');
            $table->string('residence_type');
            $table->string('approximate_price_house');
            $table->string('annual_taxable_value');
            $table->string('taxable_value_house');
            $table->string('annual_tax_amount');
            $table->string('total_tax');
            $table->string('signature_informant');
            $table->string('signature_collector');
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
