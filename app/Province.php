<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Crypt;

class Province extends Model
{
    public function getIdAttribute($value)
    {
    	return Crypt::encryptString($value);
    }
}
