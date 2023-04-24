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
            $table->string('logo')->nullable();
            $table->string('slogan')->nullable();
            $table->string('chairman_name')->nullable();
            $table->string('holding_prefix')->nullable();
            $table->string('website')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('fb_page')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('union_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('upazila_id')->nullable();
            $table->timestamps();
        });

        DB::table('porishod_settings')->insert([

            'logo'=>'logo.png',
            'slogan'=>'সময়মত ইউনিয়ন পরিষদের কর পরিশোধ করুন',
            'chairman_name'=>'মো: সাইদুর রহমান চৌধুরী',
            'website'=>'www.bdgl.online/chhiramup',
            'contact_no'=>'0101',
            'email'=>'union@email.com',
            'holding_prefix'=>'CHITIZENS/2CHUP/',
            'union_id'=>'4456',
            'district_id'=>'64',
            'upazila_id'=>'482',


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
