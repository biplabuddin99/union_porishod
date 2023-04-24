<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            UpazilaSeeder::class,
            UnionSeeder::class,
            SettingsSeeder::class,
            CompanySeeder::class,
            BranchSeeder::class,
            UserSeeder::class,
            DigitalDeviceSeeder::class,
            EducationalQualificationSeeder::class,
            GovernmentFacilitySeeder::class,
            MobileBankSeeder::class,
            ProfessionSeeder::class,
            HousingTypeSeeder::class,
            IncomeSourceSeeder::class,
        ]);
    }
}
