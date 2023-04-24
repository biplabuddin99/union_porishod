<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\IncomeSource;
use Carbon\Carbon;

class IncomeSourceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        IncomeSource::create(array(
            "name"=>"কৃষি খামার",
            "description"=>"কৃষি খামার",
            "created_at"=>Carbon::now()->addDay()
        ));
        IncomeSource::create(array(
            "name"=>"মৎস খামার",
            "description"=>"মৎস খামার",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        IncomeSource::create(array(
            "name"=>"দুগ্ধ খামার",
            "description"=>"দুগ্ধ খামার",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        IncomeSource::create(array(
            "name"=>"হাঁস-মুরগীর খামার",
            "description"=>"হাঁস-মুরগীর খামার",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        IncomeSource::create(array(
            "name"=>"গবাদি পশুর খামার",
            "description"=>"গবাদি পশুর খামার",
            "created_at"=>Carbon::now()->addDay(4)
        ));
        IncomeSource::create(array(
            "name"=>"মুদির দোকান",
            "description"=>"মুদির দোকান",
            "created_at"=>Carbon::now()->addDay(5)
        ));
        IncomeSource::create(array(
            "name"=>"আর্থিক প্রতিষ্ঠান",
            "description"=>"আর্থিক প্রতিষ্ঠান",
            "created_at"=>Carbon::now()->addDay(6)
        ));
        IncomeSource::create(array(
            "name"=>"ক্ষুদ্র ও কুটির শিল্প",
            "description"=>"ক্ষুদ্র ও কুটির শিল্প",
            "created_at"=>Carbon::now()->addDay(7)
        ));
        IncomeSource::create(array(
            "name"=>"মাঝারি শিল্প",
            "description"=>"মাঝারি শিল্প",
            "created_at"=>Carbon::now()->addDay(8)
        ));
        IncomeSource::create(array(
            "name"=>"খাবার হোটেল",
            "description"=>"খাবার হোটেল",
            "created_at"=>Carbon::now()->addDay(9)
        ));
        IncomeSource::create(array(
            "name"=>"প্রকৌশলী",
            "description"=>"প্রকৌশলী",
            "created_at"=>Carbon::now()->addDay(10)
        ));
        IncomeSource::create(array(
            "name"=>"আইনজীবি",
            "description"=>"আইনজীবি",
            "created_at"=>Carbon::now()->addDay(11)
        ));
        IncomeSource::create(array(
            "name"=>"চিকিৎসক",
            "description"=>"চিকিৎসক",
            "created_at"=>Carbon::now()->addDay(12)
        ));
        IncomeSource::create(array(
            "name"=>"ক্লিনিক",
            "description"=>"ক্লিনিক",
            "created_at"=>Carbon::now()->addDay(13)
        ));
        IncomeSource::create(array(
            "name"=>"ওষুধের দোকান",
            "description"=>"ওষুধের দোকান",
            "created_at"=>Carbon::now()->addDay(14)
        ));
        IncomeSource::create(array(
            "name"=>"আবাসিক হোটেল",
            "description"=>"আবাসিক হোটেল",
            "created_at"=>Carbon::now()->addDay(15)
        ));
        IncomeSource::create(array(
            "name"=>"মিষ্টির দোকান",
            "description"=>"মিষ্টির দোকান",
            "created_at"=>Carbon::now()->addDay(16)
        ));

        IncomeSource::create(array(
            "name"=>"বে-সরকারি হাসপাতাল",
            "description"=>"বে-সরকারি হাসপাতাল",
            "created_at"=>Carbon::now()->addDay(17)
        ));
        IncomeSource::create(array(
            "name"=>"বে-সরকারি স্কুল",
            "description"=>"বে-সরকারি স্কুল",
            "created_at"=>Carbon::now()->addDay(18)
        ));
        IncomeSource::create(array(
            "name"=>"কোচিং সেন্টার",
            "description"=>"কোচিং সেন্টার",
            "created_at"=>Carbon::now()->addDay(19)
        ));
        IncomeSource::create(array(
            "name"=>"ঠিকাদার",
            "description"=>"ঠিকাদার",
            "created_at"=>Carbon::now()->addDay(20)
        ));
        IncomeSource::create(array(
            "name"=>"হিমাগার",
            "description"=>"হিমাগার",
            "created_at"=>Carbon::now()->addDay(21)
        ));
        IncomeSource::create(array(
            "name"=>"ধান ভাঙানোর কল",
            "description"=>"ধান ভাঙানোর কল",
            "created_at"=>Carbon::now()->addDay(22)
        ));
        IncomeSource::create(array(
            "name"=>"আটার কল",
            "description"=>"আটার কল",
            "created_at"=>Carbon::now()->addDay(23)
        ));
        IncomeSource::create(array(
            "name"=>"তেলের কল",
            "description"=>"তেলের কল",
            "created_at"=>Carbon::now()->addDay(24)
        ));
        IncomeSource::create(array(
            "name"=>"স’মিল",
            "description"=>"স’মিল",
            "created_at"=>Carbon::now()->addDay(25)
        ));
        IncomeSource::create(array(
            "name"=>"বিউটি পার্লার",
            "description"=>"বিউটি পার্লার",
            "created_at"=>Carbon::now()->addDay(26)
        ));
        IncomeSource::create(array(
            "name"=>"হেয়ার কাট সেলুন",
            "description"=>"হেয়ার কাট সেলুন",
            "created_at"=>Carbon::now()->addDay(27)
        ));
        IncomeSource::create(array(
            "name"=>"লন্ড্রীর দোকান",
            "description"=>"লন্ড্রীর দোকান",
            "created_at"=>Carbon::now()->addDay(28)
        ));
        IncomeSource::create(array(
            "name"=>"ইঞ্জিনিয়রিং ফার্ম",
            "description"=>"ইঞ্জিনিয়রিং ফার্ম",
            "created_at"=>Carbon::now()->addDay(29)
        ));
        IncomeSource::create(array(
            "name"=>"শিল্প কারখানা",
            "description"=>"শিল্প কারখানা",
            "created_at"=>Carbon::now()->addDay(30)
        ));
        IncomeSource::create(array(
            "name"=>"ইট ভাটা",
            "description"=>"ইট ভাটা",
            "created_at"=>Carbon::now()->addDay(31)
        ));
        IncomeSource::create(array(
            "name"=>"কনসালটেন্সি ফার্ম",
            "description"=>"কনসালটেন্সি ফার্ম",
            "created_at"=>Carbon::now()->addDay(32)
        ));
        IncomeSource::create(array(
            "name"=>"গুদাম",
            "description"=>"গুদাম",
            "created_at"=>Carbon::now()->addDay(33)
        ));
        IncomeSource::create(array(
            "name"=>"রিক্মার মালিক",
            "description"=>"রিক্মার মালিক",
            "created_at"=>Carbon::now()->addDay(34)
        ));
        IncomeSource::create(array(
            "name"=>"বাজার ইজারা",
            "description"=>"বাজার ইজারা",
            "created_at"=>Carbon::now()->addDay(35)
        ));
        IncomeSource::create(array(
            "name"=>"টেম্পের মালিক",
            "description"=>"টেম্পের মালিক",
            "created_at"=>Carbon::now()->addDay(36)
        ));
        IncomeSource::create(array(
            "name"=>"বাসের মালিক",
            "description"=>"বাসের মালিক",
            "created_at"=>Carbon::now()->addDay(37)
        ));
        IncomeSource::create(array(
            "name"=>"ট্রাকের মালিক",
            "description"=>"ট্রাকের মালিক",
            "created_at"=>Carbon::now()->addDay(38)
        ));
        IncomeSource::create(array(
            "name"=>"পরিবহন এজেন্সী",
            "description"=>"পরিবহন এজেন্সী",
            "created_at"=>Carbon::now()->addDay(39)
        ));
        IncomeSource::create(array(
            "name"=>"নৌযানের মালিক",
            "description"=>"নৌযানের মালিক",
            "created_at"=>Carbon::now()->addDay(40)
        ));
        IncomeSource::create(array(
            "name"=>"অটো রিক্সার মালিক",
            "description"=>"অটো রিক্সার মালিক",
            "created_at"=>Carbon::now()->addDay(41)
        ));
        IncomeSource::create(array(
            "name"=>"স্টীমার/কার্গোর মালিক",
            "description"=>"স্টীমার/কার্গোর মালিক",
            "created_at"=>Carbon::now()->addDay(42)
        ));
        IncomeSource::create(array(
            "name"=>"শিশু পার্ক",
            "description"=>"শিশু পার্ক",
            "created_at"=>Carbon::now()->addDay(43)
        ));
        IncomeSource::create(array(
            "name"=>"বিনোদন পার্ক",
            "description"=>"বিনোদন পার্ক",
            "created_at"=>Carbon::now()->addDay(44)
        ));

        IncomeSource::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addYear(10)
        ));
    }
}
