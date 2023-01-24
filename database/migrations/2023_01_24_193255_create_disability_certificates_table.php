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
        Schema::create('disability_certificates', function (Blueprint $table) {
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
            $table->string('edu_qualification');
            $table->string('religion');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('pvillage_en');
            $table->string('pvillage_bn');
            $table->string('proad_en');
            $table->string('proad_bn');
            $table->string('pholding');
            $table->string('pward');
            $table->string('pdistrict');
            $table->string('pupazila');
            $table->string('ppost_office');
            $table->string('village_en');
            $table->string('village_bn');
            $table->string('road_en');
            $table->string('road_bn');
            $table->string('holding');
            $table->string('ward');
            $table->string('district');
            $table->string('upazila');
            $table->string('post_office');
            $table->string('contact');
            $table->string('email');
            $table->string('comment_en');
            $table->string('comment_bn');
            $table->string('image');
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
        Schema::dropIfExists('disability_certificates');
    }
};
