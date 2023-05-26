<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use Illuminate\Database\Eloquent\SoftDeletes;

class CharacterCertificate extends Model
{
    use HasFactory,SoftDeletes;
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
    public function income(){
        return $this->belongsTo(Profession::class,'source_income','id');
    }
    public function approved(){
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function chairman(){
        return $this->belongsTo(Chairman::class,'chairman_id','id');
    }
}
