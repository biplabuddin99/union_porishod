<?php

namespace App\Models\Settings\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Union extends Model
{
    use HasFactory,SoftDeletes;
    public function upazila(){
        return $this->belongsTo(Upazila::class);
    }
}
