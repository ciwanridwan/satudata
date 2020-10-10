<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $hidden = ['id','updated_at'];
    protected $appends = ['tahun'];

    public function getCreatedAtAttribute($value)
    {
    	return date('Y-m-d H:i:s', strtotime($value));
    }

    public function getTahunAttribute()
    {
    	return date('Y', strtotime($this->created_at));
    }
}
