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
        Schema::create('porishod_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('union_name');
            $table->string('district_name');
            $table->string('upazila_name');
            $table->timestamps();
        });

        DB::table('porishod_settings')->insert([

            'logo'=>'logo.png',
            'union_name'=>'চিরাম ইউনিয়ন পরিষদ',
            'district_name'=>'নেত্রকোণা',
            'upazila_name'=>'বারহাট্টা',


    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porishod_settings');
    }

};
