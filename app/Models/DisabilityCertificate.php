<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;

class DisabilityCertificate extends Model
{
    use HasFactory;

    public function district()
	{
		return $this->belongsTo(District::class);
	}
    public function thana()
	{
		return $this->belongsTo(Thana::class);
	}
}
