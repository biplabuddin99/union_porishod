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
        Schema::create('all_online_applications', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('holding_date')->nullable();
            $table->string('head_household')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('birth_registration_id')->nullable();
            $table->integer('religion')->nullable();
            $table->string('phone')->nullable();
            $table->integer('edu_qual')->nullable();
            $table->string('email')->nullable();
            $table->string('source_income')->nullable();
            $table->integer('marital_status')->nullable();
            $table->string('internet_connection')->nullable();
            $table->integer('tube_well')->nullable();
            $table->integer('disline_connection')->nullable();
            $table->integer('paved_bathroom')->nullable();
            $table->integer('arsenic_free')->nullable();
            $table->string('mobile_bank')->nullable();
            $table->string('digital_devices')->nullable();
            $table->string('government_facilities')->nullable();
            $table->integer('freedom_fighter')->nullable();
            $table->string('type_application')->nullable();
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
        Schema::dropIfExists('all_online_applications');
    }
};
