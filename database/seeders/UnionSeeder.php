<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Settings\Location\Union;
use Carbon\Carbon;

class UnionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Union::truncate();
       Schema::enableForeignKeyConstraints();
        
        
        $csvFile=fopen(base_path("database/data/unions.csv"),"r");
        while(($data=fgetcsv($csvFile,6000,","))!==FALSE){
            Union::create(array(
                "id"=>trim($data['0']),
                "upazila_id"=>trim($data['1']),
                "name"=>trim($data['2']),
                "name_bn"=>trim($data['3']),
                "created_at"=>Carbon::now()
            ));
        }
        fclose($csvFile);
    }
}
