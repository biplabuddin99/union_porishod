<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Profession;
use Carbon\Carbon;

class ProfessionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        Profession::create(array(
            "name"=>"শিক্ষক",
            "description"=>"শিক্ষক",
            "created_at"=>Carbon::now()->addDay()
        ));
        Profession::create(array(
            "name"=>"শিক্ষার্থী",
            "description"=>"শিক্ষার্থী",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        Profession::create(array(
            "name"=>"সরকারি চাকুরীজীবি",
            "description"=>"সরকারি চাকুরীজীবি",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        Profession::create(array(
            "name"=>"বে-সরকারি চাকুরীজীবি",
            "description"=>"বে-সরকারি চাকুরীজীবি",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        Profession::create(array(
            "name"=>"গৃহীনি",
            "description"=>"গৃহীনি",
            "created_at"=>Carbon::now()->addDay(4)
        ));
        Profession::create(array(
            "name"=>"কৃষক",
            "description"=>"কৃষক",
            "created_at"=>Carbon::now()->addDay(5)
        ));
        Profession::create(array(
            "name"=>"ব্যবসা",
            "description"=>"ব্যবসা",
            "created_at"=>Carbon::now()->addDay(6)
        ));
        Profession::create(array(
            "name"=>"প্রকৌশলি",
            "description"=>"প্রকৌশলি",
            "created_at"=>Carbon::now()->addDay(7)
        ));
        Profession::create(array(
            "name"=>"আইনজীবী",
            "description"=>"আইনজীবী",
            "created_at"=>Carbon::now()->addDay(8)
        ));
        Profession::create(array(
            "name"=>"চিকিৎসক",
            "description"=>"চিকিৎসক",
            "created_at"=>Carbon::now()->addDay(9)
        ));
        Profession::create(array(
            "name"=>"সেবিকা",
            "description"=>"সেবিকা",
            "created_at"=>Carbon::now()->addDay(10)
        ));
        Profession::create(array(
            "name"=>"দলিল লেখক",
            "description"=>"দলিল লেখক",
            "created_at"=>Carbon::now()->addDay(11)
        ));
        Profession::create(array(
            "name"=>"শ্রমিক",
            "description"=>"শ্রমিক",
            "created_at"=>Carbon::now()->addDay(12)
        ));
        Profession::create(array(
            "name"=>"ঠিকাদার",
            "description"=>"ঠিকাদার",
            "created_at"=>Carbon::now()->addDay(13)
        ));
        Profession::create(array(
            "name"=>"মৎস চাষী",
            "description"=>"মৎস চাষী",
            "created_at"=>Carbon::now()->addDay(14)
        ));
        Profession::create(array(
            "name"=>"গাড়ি চালক",
            "description"=>"গাড়ি চালক",
            "created_at"=>Carbon::now()->addDay(15)
        ));
        Profession::create(array(
            "name"=>"প্রবাসী",
            "description"=>"প্রবাসী",
            "created_at"=>Carbon::now()->addDay(16)
        ));
        Profession::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addYear(10)
        ));
    }
}
