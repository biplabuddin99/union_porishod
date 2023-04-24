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
        Schema::create('chairmen', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('address')->nullable();
            $table->string('nid')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->date('act_start')->nullable();
            $table->date('act_end')->nullable();
            $table->timestamps();
        });

        DB::table('chairmen')->insert([

            'name'=>'মো: সাইদুর রহমান চৌধুরী',
            'photo'=>'mujib_logo-01.png',
            'father_name'=>'',
            'mother_name'=>''
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chairmen');
    }
};
