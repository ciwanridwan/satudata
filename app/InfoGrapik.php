<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriInfo;
use Crypt;

class InfoGrapik extends Model
{
	protected $appends = ['plain_id', 'category', 'date', 'id'];

	public function getPlainIdAttribute()
	{
		return $this->id;
	}

	public function getIdAttribute($value)
	{
		return Crypt::encryptString($value);
	}

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
