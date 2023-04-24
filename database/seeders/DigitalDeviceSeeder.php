<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\DigitalDevice;
use Carbon\Carbon;

class DigitalDeviceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        DigitalDevice::create(array(
            "name"=>"স্মার্ট ফোন",
            "description"=>"স্মার্ট ফোন",
            "created_at"=>Carbon::now()->addDay()
        ));
        DigitalDevice::create(array(
            "name"=>"ল্যাপটপ",
            "description"=>"ল্যাপটপ",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        DigitalDevice::create(array(
            "name"=>"কম্পিউটার",
            "description"=>"কম্পিউটার",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        DigitalDevice::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addYear(10)
        ));
    }
}
