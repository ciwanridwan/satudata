<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Data;

class Ketenagakerjaan extends Model
{
    protected $appends = ['count'];

    public function getCountAttribute()
    {
    	return Data::where('Ketenagakerjaan_id', $this->id)->count();
    }
}
