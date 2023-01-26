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
        Schema::create('oldage_allowances', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('national_id');
            $table->string('birth_registration');
            $table->string('passport_no');
            $table->string('birth_date');
            $table->string('father_name_en');
            $table->string('father_name_bn');
            $table->string('mother_name_en');
            $table->string('mother_name_bn');
            $table->string('occupation');
            $table->string('resident');
            $table->string('educational_qualification');
            $table->string('religion');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('present_village_en');
            $table->string('present_village_bn');
            $table->string('present_rbs_en');
            $table->string('present_rbs_bn');
            $table->string('present_holding_no');
            $table->string('present_ward_no');
            $table->string('present_district_id');
            $table->string('present_upazila_id');
            $table->string('present_postoffice_id');
            $table->string('permanent_village_en');
            $table->string('permanent_village_bn');
            $table->string('permanent_rbs_en');
            $table->string('permanent_rbs_bn');
            $table->string('permanent_holding_no');
            $table->string('permanent_ward_no');
            $table->string('permanent_district_id');
            $table->string('permanent_upazila_id');
            $table->string('permanent_postoffice_id');
            $table->string('mobile');
            $table->string('email');
            $table->string('comment_en');
            $table->string('comment_bn');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('oldage_allowances');
    }
};
