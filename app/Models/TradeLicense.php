<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\Settings\Location\District;

class TradeLicense extends Model
{
    use HasFactory;

    public function business(){
        return $this->belongsTo(BusinessType::class,'business_type','id');
    }
    public function house(){
        return $this->belongsTo(HousingType::class,'business_organization_type','id');
    }
    public function renewal_year(){
        return $this->belongsTo(TradelicenseRenewalyear::class,'tradelicense_renewal_year','id');
    }

    public function district(){
        return $this->belongsTo(District::class,'district_id','id');
    }
    public function upazila(){
        return $this->belongsTo(Upazila::class,'upazila_id','id');
    }
    public function union(){
        return $this->belongsTo(Union::class,'union_id','id');
    }
    public function ward(){
        return $this->belongsTo(Ward_no::class,'ward_id','id');
    }
    public function approved(){
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function chairman(){
        return $this->belongsTo(Chairman::class,'chairman_id','id');
    }
}
