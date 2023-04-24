<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\Ward_no;

class AttestationFamilymember extends Model
{
    use HasFactory,SoftDeletes;

    public function attestation_familymember_children(){
        return $this->hasMany(AttestationFamilymemberChild::class,'familymember_id','id');
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
        return $this->belongsTo(Ward_no::class,'ward_no','id');
    }
}
