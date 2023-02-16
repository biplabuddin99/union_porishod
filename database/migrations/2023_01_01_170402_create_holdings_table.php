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
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('new_holding_no')->unique();
            $table->string('previous_holding_no')->nullable();
            $table->string('village')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('gender')->nullable();
            $table->integer('digital_birth_cer')->nullable();
            $table->integer('paved_bathroom')->nullable();
            $table->integer('expatriate')->nullable();
            $table->integer('power_connection')->nullable();
            $table->integer('tube_well')->nullable();
            $table->integer('bank')->nullable();
            $table->string('edu_qual')->nullable();
            $table->string('family_male')->nullable();
            $table->string('family_female')->nullable();
            $table->string('family_total')->nullable();
            $table->string('single_joint_family')->nullable();
            $table->string('religion')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('government_facilities')->nullable();
            $table->string('family_status')->nullable();
            $table->string('digital_devices')->nullable();
            $table->string('telecommunications')->nullable();
            $table->string('source_income')->nullable();
            $table->string('business_taxes')->nullable();
            $table->string('business_amount_taxes')->nullable();
            $table->string('sources_other_taxes')->nullable();
            $table->string('other_taxes_amount')->nullable();
            $table->string('residence_type')->nullable();
            $table->string('approximate_price_house')->nullable();
            $table->string('annual_taxable_value')->nullable();
            $table->string('taxable_value_house')->nullable();
            $table->string('annual_tax_amount')->nullable();
            $table->string('total_tax')->nullable();
            $table->string('signature_informant')->nullable();
            $table->string('signature_collector')->nullable();
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
