<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warishan extends Model
{
    use HasFactory,SoftDeletes;

    public function warisan_children(){
        return $this->hasMany(WarisanChild::class,'warisan_id','id');
    }
}
