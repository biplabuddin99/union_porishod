<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttestationFamilymember extends Model
{
    use HasFactory,SoftDeletes;

    public function attestation_familymember_children(){
        return $this->hasMany(AttestationFamilymemberChild::class,'familymember_id','id');
    }
}
