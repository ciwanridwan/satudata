<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Data;

class UnitKerja extends Model
{
    protected $appends = ['total_data'];

    public function getTotalDataAttribute()
    {
    	return Data::where('unit_kerja_id', $this->id)->count();
    }
}
