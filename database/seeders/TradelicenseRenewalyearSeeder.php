<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TradelicenseRenewalyear;

class TradelicenseRenewalyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৩-২০২৪",
            "description"=>"অর্থ বছর ২০২৩-২০২৪",
            "created_at"=>Carbon::now()->addDay()
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৪-২০২৫",
            "description"=>"অর্থ বছর ২০২৪-২০২৫",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৫-২০২৬",
            "description"=>"অর্থ বছর ২০২৫-২০২৬",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৬-২০২৭",
            "description"=>"অর্থ বছর ২০২৬-২০২৭",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৬-২০২৭",
            "description"=>"অর্থ বছর ২০২৬-২০২৭",
            "created_at"=>Carbon::now()->addDay(4)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৭-২০২৮",
            "description"=>"অর্থ বছর ২০২৭-২০২৮",
            "created_at"=>Carbon::now()->addDay(5)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৮-২০২৯",
            "description"=>"অর্থ বছর ২০২৮-২০২৯",
            "created_at"=>Carbon::now()->addDay(6)
        ));
        TradelicenseRenewalyear::create(array(
            "name"=>"অর্থ বছর ২০২৯-২০৩০",
            "description"=>"অর্থ বছর ২০২৯-২০৩০",
            "created_at"=>Carbon::now()->addDay(7)
        ));
    }
}
