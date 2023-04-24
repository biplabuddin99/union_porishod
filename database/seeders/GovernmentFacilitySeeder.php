<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\GovernmentFacility;
use Carbon\Carbon;

class GovernmentFacilitySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        GovernmentFacility::create(array(
            "name"=>"ভিজিএফ কার্ড",
            "description"=>"ভিজিএফ কার্ড",
            "created_at"=>Carbon::now()->addDay()
        ));
        GovernmentFacility::create(array(
            "name"=>"ভিজিডি কার্ড",
            "description"=>"ভিজিডি কার্ড",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        GovernmentFacility::create(array(
            "name"=>"রেশন কার্ড",
            "description"=>"রেশন কার্ড",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        GovernmentFacility::create(array(
            "name"=>"বয়স্ক ভাতা",
            "description"=>"বয়স্ক ভাতা",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        GovernmentFacility::create(array(
            "name"=>"প্রতিবন্ধী ভাতা",
            "description"=>"প্রতিবন্ধী ভাতা",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        GovernmentFacility::create(array(
            "name"=>"বিধবা ভাতা",
            "description"=>"বিধবা ভাতা",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        GovernmentFacility::create(array(
            "name"=>"মাতৃত্বকালীন ভাতা",
            "description"=>"মাতৃত্বকালীন ভাতা",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        GovernmentFacility::create(array(
            "name"=>"অন্যান্য",
            "description"=>"অন্যান্য",
            "created_at"=>Carbon::now()->addYear(10)
        ));
    }
}
