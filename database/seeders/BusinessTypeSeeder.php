<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\BusinessType;
use Carbon\Carbon;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessType::create(array(
            "name"=>"কৃষি খামার",
            "description"=>"কৃষি খামার",
            "created_at"=>Carbon::now()->addDay()
        ));
        BusinessType::create(array(
            "name"=>"মুদির দোকান",
            "description"=>"মুদির দোকান",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        BusinessType::create(array(
            "name"=>"আবাসিক হোটেল",
            "description"=>"আবাসিক হোটেল",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        BusinessType::create(array(
            "name"=>"খাবার হোটেল",
            "description"=>"খাবার হোটেল",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        BusinessType::create(array(
            "name"=>"স’মিল",
            "description"=>"স’মিল",
            "created_at"=>Carbon::now()->addDay(4)
        ));
        BusinessType::create(array(
            "name"=>"হর্ডওয়্যার দোকান",
            "description"=>"হর্ডওয়্যার দোকান",
            "created_at"=>Carbon::now()->addDay(5)
        ));
        BusinessType::create(array(
            "name"=>"আইসক্রিম কারখানা",
            "description"=>"আইসক্রিম কারখানা",
            "created_at"=>Carbon::now()->addDay(6)
        ));
        BusinessType::create(array(
            "name"=>"ফার্নিচার দোকান",
            "description"=>"ফার্নিচার দোকান",
            "created_at"=>Carbon::now()->addDay(7)
        ));
        BusinessType::create(array(
            "name"=>"মাংসের দোকার",
            "description"=>"মাংসের দোকার",
            "created_at"=>Carbon::now()->addDay(8)
        ));
        BusinessType::create(array(
            "name"=>"ওয়ার্কশপ",
            "description"=>"ওয়ার্কশপ",
            "created_at"=>Carbon::now()->addDay(9)
        ));
        BusinessType::create(array(
            "name"=>"ক্ষুদ্র ও কুটির শিল্প",
            "description"=>"ক্ষুদ্র ও কুটির শিল্প",
            "created_at"=>Carbon::now()->addDay(10)
        ));
        BusinessType::create(array(
            "name"=>"বে-সরকারি হাসপাতাল",
            "description"=>"বে-সরকারি হাসপাতাল",
            "created_at"=>Carbon::now()->addDay(11)
        ));
        BusinessType::create(array(
            "name"=>"লন্ড্রীর দোকান",
            "description"=>"লন্ড্রীর দোকান",
            "created_at"=>Carbon::now()->addDay(12)
        ));
        BusinessType::create(array(
            "name"=>"হেয়ার কাট সেলুন",
            "description"=>"হেয়ার কাট সেলুন",
            "created_at"=>Carbon::now()->addDay(13)
        ));
        BusinessType::create(array(
            "name"=>"কনসালটেন্সি ফার্ম",
            "description"=>"কনসালটেন্সি ফার্ম",
            "created_at"=>Carbon::now()->addDay(14)
        ));
        BusinessType::create(array(
            "name"=>"চাউলের দোকান",
            "description"=>"চাউলের দোকান",
            "created_at"=>Carbon::now()->addDay(15)
        ));
        BusinessType::create(array(
            "name"=>"ডিজিটাল স্টুডিও",
            "description"=>"ডিজিটাল স্টুডিও",
            "created_at"=>Carbon::now()->addDay(16)
        ));
        BusinessType::create(array(
            "name"=>"গবাদি পশুর খামার",
            "description"=>"গবাদি পশুর খামার",
            "created_at"=>Carbon::now()->addDay(17)
        ));
        BusinessType::create(array(
            "name"=>"খাবার হোটেল",
            "description"=>"খাবার হোটেল",
            "created_at"=>Carbon::now()->addDay(18)
        ));
        BusinessType::create(array(
            "name"=>"ঔষদের দোকান",
            "description"=>"ঔষদের দোকান",
            "created_at"=>Carbon::now()->addDay(19)
        ));
        BusinessType::create(array(
            "name"=>"কোচিং সেন্টার",
            "description"=>"কোচিং সেন্টার",
            "created_at"=>Carbon::now()->addDay(20)
        ));
        BusinessType::create(array(
            "name"=>"ইলেকট্রিক্যাল শোরুম",
            "description"=>"ইলেকট্রিক্যাল শোরুম",
            "created_at"=>Carbon::now()->addDay(21)
        ));
        BusinessType::create(array(
            "name"=>"রড-সিমেন্ট দোকান",
            "description"=>"রড-সিমেন্ট দোকান",
            "created_at"=>Carbon::now()->addDay(22)
        ));
        BusinessType::create(array(
            "name"=>"টিভি/ফ্রিজ মেরামত দোকান",
            "description"=>"টিভি/ফ্রিজ মেরামত দোকান",
            "created_at"=>Carbon::now()->addDay(23)
        ));
        BusinessType::create(array(
            "name"=>"জুতার দোকান",
            "description"=>"জুতার দোকান",
            "created_at"=>Carbon::now()->addDay(24)
        ));
        BusinessType::create(array(
            "name"=>"কসমেটিক্স দোকান",
            "description"=>"কসমেটিক্স দোকান",
            "created_at"=>Carbon::now()->addDay(25)
        ));
        BusinessType::create(array(
            "name"=>"মৎস খামার",
            "description"=>"মৎস খামার",
            "created_at"=>Carbon::now()->addDay(26)
        ));
        BusinessType::create(array(
            "name"=>"আথিক প্রতিষ্ঠান",
            "description"=>"আথিক প্রতিষ্ঠান",
            "created_at"=>Carbon::now()->addDay(27)
        ));
        BusinessType::create(array(
            "name"=>"মিষ্টির দোকান",
            "description"=>"মিষ্টির দোকান",
            "created_at"=>Carbon::now()->addDay(28)
        ));
        BusinessType::create(array(
            "name"=>"কাপড়ের দোকান",
            "description"=>"কাপড়ের দোকান",
            "created_at"=>Carbon::now()->addDay(29)
        ));
        BusinessType::create(array(
            "name"=>"বিউটি পার্লার",
            "description"=>"বিউটি পার্লার",
            "created_at"=>Carbon::now()->addDay(30)
        ));
        BusinessType::create(array(
            "name"=>"ইট ভাটা",
            "description"=>"ইট ভাটা",
            "created_at"=>Carbon::now()->addDay(31)
        ));
        BusinessType::create(array(
            "name"=>"ঠিকাদার",
            "description"=>"ঠিকাদার",
            "created_at"=>Carbon::now()->addDay(32)
        ));
        BusinessType::create(array(
            "name"=>"কম্পিউটার দোকান",
            "description"=>"কম্পিউটার দোকান",
            "created_at"=>Carbon::now()->addDay(33)
        ));
        BusinessType::create(array(
            "name"=>"হাঁস-মুরগীর খামার",
            "description"=>"হাঁস-মুরগীর খামার",
            "created_at"=>Carbon::now()->addDay(34)
        ));
        BusinessType::create(array(
            "name"=>"লাইব্রেরী/ষ্টেশনারী",
            "description"=>"লাইব্রেরী/ষ্টেশনারী",
            "created_at"=>Carbon::now()->addDay(35)
        ));
        BusinessType::create(array(
            "name"=>"ক্লিনিক",
            "description"=>"ক্লিনিক",
            "created_at"=>Carbon::now()->addDay(36)
        ));
        BusinessType::create(array(
            "name"=>"বে-সরকারী স্কুল",
            "description"=>"বে-সরকারী স্কুল",
            "created_at"=>Carbon::now()->addDay(37)
        ));
        BusinessType::create(array(
            "name"=>"তৈল/মসলা কারখানা",
            "description"=>"তৈল/মসলা কারখানা",
            "created_at"=>Carbon::now()->addDay(38)
        ));
        BusinessType::create(array(
            "name"=>"ধান/গম ভাঙ্গার কারখানা",
            "description"=>"ধান/গম ভাঙ্গার কারখানা",
            "created_at"=>Carbon::now()->addDay(39)
        ));
        BusinessType::create(array(
            "name"=>"গুদাম",
            "description"=>"গুদাম",
            "created_at"=>Carbon::now()->addDay(40)
        ));
        BusinessType::create(array(
            "name"=>"শিশু পার্ক",
            "description"=>"শিশু পার্ক",
            "created_at"=>Carbon::now()->addDay(41)
        ));
        BusinessType::create(array(
            "name"=>"ইঞ্জিনিয়ারিং ফার্ম",
            "description"=>"ইঞ্জিনিয়ারিং ফার্ম",
            "created_at"=>Carbon::now()->addDay(42)
        ));
        BusinessType::create(array(
            "name"=>"ইলেকট্রিক্যাল দোকান",
            "description"=>"ইলেকট্রিক্যাল দোকান",
            "created_at"=>Carbon::now()->addDay(43)
        ));
        BusinessType::create(array(
            "name"=>"পরিবহন এজেন্সি",
            "description"=>"পরিবহন এজেন্সি",
            "created_at"=>Carbon::now()->addDay(44)
        ));
        BusinessType::create(array(
            "name"=>"বিনোদন পার্ক",
            "description"=>"বিনোদন পার্ক",
            "created_at"=>Carbon::now()->addDay(45)
        ));
        BusinessType::create(array(
            "name"=>"মোবাইল দোকান/শোরুম",
            "description"=>"মোবাইল দোকান/শোরুম",
            "created_at"=>Carbon::now()->addDay(46)
        ));
        BusinessType::create(array(
            "name"=>"সারের দোকান",
            "description"=>"সারের দোকান",
            "created_at"=>Carbon::now()->addDay(47)
        ));
        BusinessType::create(array(
            "name"=>"ফলের দোকান",
            "description"=>"ফলের দোকান",
            "created_at"=>Carbon::now()->addDay(48)
        ));
        BusinessType::create(array(
            "name"=>"মাছের দোকান",
            "description"=>"মাছের দোকান",
            "created_at"=>Carbon::now()->addDay(49)
        ));
        BusinessType::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addDay(50)
        ));
    }
}
