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
        Schema::create('warisan_children', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('warisan_id')->nullable();
            $table->string('name');
            $table->string('ralation');
            $table->string('birth_date');
            $table->string('cnid');
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
        Schema::dropIfExists('warisan_children');
    }
};