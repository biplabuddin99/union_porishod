<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\MobileBank;
use Carbon\Carbon;

class MobileBankSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        MobileBank::create(array(
                "name"=>"বিকাশ",
                "description"=>"বিকাশ",
                "created_at"=>Carbon::now()->addDay()
            ));
        MobileBank::create(array(
                "name"=>"নগদ",
                "description"=>"নগদ",
                "created_at"=>Carbon::now()->addDay(1)
            ));
        MobileBank::create(array(
                "name"=>"রকেট",
                "description"=>"রকেট",
                "created_at"=>Carbon::now()->addDay(2)
            ));
        MobileBank::create(array(
            "name"=>"উপায়",
            "description"=>"উপায়",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        MobileBank::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addYear(10)
        ));
       
    }
}
