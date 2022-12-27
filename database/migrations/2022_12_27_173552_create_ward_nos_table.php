<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_nos', function (Blueprint $table) {
            $table->id();
            $table->string('ward_name');
            $table->string('status')->default(1);
            $table->timestamps();
        });

        DB::table('ward_nos')->insert([
            ['ward_name'=>'1no'],
            ['ward_name'=>'2no'],
            ['ward_name'=>'3no'],
            ['ward_name'=>'4no'],
            ['ward_name'=>'5no'],
            ['ward_name'=>'6no'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ward_nos');
    }

};
