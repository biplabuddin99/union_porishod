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
            $table->string('ward_name_bn');
            $table->string('status')->default(1);
            $table->timestamps();
        });

        DB::table('ward_nos')->insert([
            [
                'ward_name'=>'1no Ward',
                'ward_name_bn'=>'১ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'2no Ward',
                'ward_name_bn'=>'২ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'3no Ward',
                'ward_name_bn'=>'৩ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'4no Ward',
                'ward_name_bn'=>'৪ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'5no Ward',
                'ward_name_bn'=>'৫ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'6no Ward',
                'ward_name_bn'=>'৬ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'7no Ward',
                'ward_name_bn'=>'৭ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'8no Ward',
                'ward_name_bn'=>'৮ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'9no Ward',
                'ward_name_bn'=>'৯ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'10no Ward',
                'ward_name_bn'=>'১০ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'11no Ward',
                'ward_name_bn'=>'১১ নং ওয়ার্ড',
            ],
            [
                'ward_name'=>'12no Ward',
                'ward_name_bn'=>'১২ নং ওয়ার্ড',
            ],
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
