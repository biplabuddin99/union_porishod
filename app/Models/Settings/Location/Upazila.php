<?php

namespace App\Models\Settings\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
{
    use HasFactory,SoftDeletes;
    public function district(){
        return $this->belongsTo(District::class);
    }
}
