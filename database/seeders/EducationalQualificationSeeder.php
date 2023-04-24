<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\EducationalQualification;
use Carbon\Carbon;

class EducationalQualificationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        EducationalQualification::create(array(
            "name"=>"স্ব-শিক্ষিত",
            "description"=>"স্ব-শিক্ষিত",
            "created_at"=>Carbon::now()->addDay()
        ));
        EducationalQualification::create(array(
            "name"=>"প্রাথমিক",
            "description"=>"প্রাথমিক",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        EducationalQualification::create(array(
            "name"=>"মাধ্যমিক",
            "description"=>"মাধ্যমিক",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        EducationalQualification::create(array(
            "name"=>"উচ্চ-মাধ্যমিক",
            "description"=>"উচ্চ-মাধ্যমিক",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        EducationalQualification::create(array(
            "name"=>"উচ্চতর-ডিগ্রী",
            "description"=>"উচ্চতর-ডিগ্রী",
            "created_at"=>Carbon::now()->addDay(4)
        ));
    }
}
