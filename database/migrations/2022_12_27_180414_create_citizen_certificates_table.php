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
        Schema::create('citizen_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('person_name');
            $table->string('father')->nullable();
            $table->string('husband')->nullable();
            $table->string('mother')->nullable();
            $table->string('postoffice')->nullable();
            $table->string('division_id');
            $table->string('thana_id');
            $table->string('village')->nullable();
            $table->string('ward_no_id')->nullable();
            $table->string('district_id');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('citizen_certificates');
    }
};
