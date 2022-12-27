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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('applicantName')->nullable();
            $table->string('FatherOrHusband')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('id_no')->nullable();
            $table->string('man')->nullable();
            $table->string('woman')->nullable();
            $table->string('totalMember')->nullable();
            $table->string('voterNumber')->nullable();
            $table->string('allowance')->nullable();
            $table->string('icomeSource')->nullable();
            $table->string('house_name')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('typeOfHouse')->nullable();
            $table->string('total_room')->nullable();
            $table->string('percetageOfHouseLand')->nullable();
            $table->string('percetageOfPaddyLand')->nullable();
            $table->string('estimatedValuOfHouse')->nullable();
            $table->string('tax_levied')->nullable();
            $table->string('tax_collected')->nullable();
            $table->string('owing')->nullable();
            $table->string('village')->nullable();
            $table->string('postOffice')->nullable();
            $table->string('word_no')->nullable();
            $table->string('division_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('thana_id')->nullable();
            $table->string('image')->nullable();
            $table->string('home_image')->nullable();
            $table->string('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('profiles');
    }
};
