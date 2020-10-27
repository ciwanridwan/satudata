<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriGalery;
use App\Gambar;

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

	public function getFotoAttribute($value)
	{
		$picture = Gambar::where('galery_id', $this->id)->first();
		if ($picture) {
			return $picture->picture;
		}

		return $value;
	}
}
