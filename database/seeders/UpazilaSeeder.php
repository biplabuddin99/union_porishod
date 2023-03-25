<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Settings\Location\Upazila;
use Carbon\Carbon;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Upazila::truncate();
       Schema::enableForeignKeyConstraints();
        
        
        $csvFile=fopen(base_path("database/data/upazilas.csv"),"r");
        while(($data=fgetcsv($csvFile,5000,","))!==FALSE){
            Upazila::create(array(
                "id"=>trim($data['0']),
                "district_id"=>trim($data['1']),
                "name"=>trim($data['2']),
                "name_bn"=>trim($data['3']),
                "created_at"=>Carbon::now()
            ));
        }
        fclose($csvFile);
    }
}
