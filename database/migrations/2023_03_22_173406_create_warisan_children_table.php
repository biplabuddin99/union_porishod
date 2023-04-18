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
            $table->string('name')->nullable();
            $table->string('ralation')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('cnid')->nullable();
            $table->string('ccomments')->nullable();
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
