<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\HousingType;
use Carbon\Carbon;

class HousingTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        HousingType::create(array(
            "name"=>"কাচা-ঘর",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay()
        ));
        HousingType::create(array(
            "name"=>"টিনসেট",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay(1)
        ));
        HousingType::create(array(
            "name"=>"আধা-পাকা",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay(2)
        ));
        HousingType::create(array(
            "name"=>"পাকা ইমারত",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay(3)
        ));
        HousingType::create(array(
            "name"=>"২য় তলা বাড়ী",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay(4)
        ));
        HousingType::create(array(
            "name"=>"৩য় তলা বাড়ী",
            "tax_amount"=>"0",
            "created_at"=>Carbon::now()->addDay(5)
        ));
    }
}
