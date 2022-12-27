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
            $table->string('applicantName');
            $table->string('FatherOrHusband');
            $table->string('mother_name');
            $table->string('contact');
            $table->string('id_no');
            $table->string('man');
            $table->string('woman');
            $table->string('totalMember');
            $table->string('voterNumber');
            $table->string('allowance');
            $table->string('icomeSource');
            $table->string('house_name');
            $table->string('holding_no');
            $table->string('typeOfHouse');
            $table->string('total_room');
            $table->string('percetageOfHouseLand');
            $table->string('percetageOfPaddyLand');
            $table->string('estimatedValuOfHouse');
            $table->string('tax_levied');
            $table->string('tax_collected');
            $table->string('owing');
            $table->string('village');
            $table->string('postOffice');
            $table->string('word_no');
            $table->string('division_id');
            $table->string('district_id');
            $table->string('thana_id');
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
