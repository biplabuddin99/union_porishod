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
        Schema::create('warishans', function (Blueprint $table) {
            $table->id();
            $table->string('warishan_person_name')->nullable();
            $table->date('dath_date')->nullable();
            $table->string('fatherOrMother')->nullable();
            $table->string('village')->nullable();
            $table->string('ward_no_id')->nullable();
            $table->string('division_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('thana_id')->nullable();
            $table->string('applicant')->nullable();
            $table->string('mobile')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('serial')->nullable();
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
        Schema::dropIfExists('warishans');
    }
};
