<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriInfo;
use Crypt;

class InfoGrapik extends Model
{
	protected $appends = ['id','category', 'date', 'plain_id','thumbnail'];

	public function getPlainIdAttribute($value)
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

	public function getThumbnailAttribute($value)
    {
    	if ($value) {
    		return $value;
    	}

    	return 'files/infografik/' . str_replace('public/', null, $this->gambar);
    }
}
