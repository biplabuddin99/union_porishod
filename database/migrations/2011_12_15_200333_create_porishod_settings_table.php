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
            $table->string('division_name_en');
            $table->string('division_name_bn');
            $table->string('district_name_en');
            $table->string('district_name_bn');
            $table->string('postoffice_name_en');
            $table->string('postoffice_name_bn');
            $table->timestamps();
        });

        DB::table('porishod_settings')->insert([

            'division_name_en'=>'chittagong',
            'division_name_bn'=>'১ নং ওয়ার্ড',
            'district_name_en'=>'Noakhali',
            'district_name_bn'=>'১ নং ওয়ার্ড',
            'postoffice_name_en'=>'Hatiya',
            'postoffice_name_bn'=>'১ নং ওয়ার্ড',


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
