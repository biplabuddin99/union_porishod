<?php

namespace App\Models;

use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CitizenCertificate extends Model
{
    use HasFactory,SoftDeletes;

    public function division(){
        return $this->belongsTo(Division::class,'division_id','id');
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id','id');
    }
    public function thana()
	{
		return $this->belongsTo(Thana::class,'thana_id','id');
	}
    public function ward_no()
	{
		return $this->belongsTo(Ward_no::class,'ward_no_id','id');
	}
}
