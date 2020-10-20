<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriInfo;

class InfoGrapik extends Model
{
	protected $appends = ['category','date'];

	public function getCategoryAttribute()
	{
		return KategoriInfo::find($this->kategori_info_id)->nama;
	}

	public function getDateAttribute()
	{
		$date = \Carbon\Carbon::parse($this->attributes['created_at'])->locale('id');
		return $date->translatedFormat('l, d M Y');
	}
}
