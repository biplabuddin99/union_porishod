<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeLicense extends Model
{
    use HasFactory;

    public function business(){
        return $this->belongsTo(BusinessType::class,'business_type','id');
    }
    public function ward(){
        return $this->belongsTo(Ward_no::class,'ward_id','id');
    }
    public function house(){
        return $this->belongsTo(HousingType::class,'business_organization_type','id');
    }
    public function renewal_year(){
        return $this->belongsTo(TradelicenseRenewalyear::class,'tradelicense_renewal_year','id');
    }
}
