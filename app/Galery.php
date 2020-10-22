<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriGalery;

class Galery extends Model
{
	protected $appends = ['category'];

    public function getCategoryAttribute()
    {
    	return KategoriGalery::find($this->kategori_galery_id)->name;
    }

    public function getDateAttribute()
	{
		$date = \Carbon\Carbon::parse($this->attributes['created_at'])->locale('id');
		return $date->translatedFormat('l, d M Y');
	}
}
