<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Data extends Model
{
	protected $hidden = ['id','updated_at'];
	protected $appends = ['tahun'];

	public static function search($request)
	{
		$query = new self;
		if ($request) {
			$request = explode(' ', $request);
			foreach ($request as $key1 => $value1) {
				foreach (self::getColumns() as $key => $value) {
					if ($key == 0) {
						$query = $query->orWhere($value, 'like', '%' . $value1 . '%');
					} else {
						$query = $query->orWhere($value, 'like', '%' . $value1 . '%');
					}
				}
			}
		}
		$return['total'] = $query->count();
		$return['data'] = $query->orderBy('created_at', 'desc')
		->offset(0)->limit(10)
		->get();
		return [$return['data'], $return['total']];
	}

	public static function getColumns()
	{
		return Schema::getColumnListing('data');		
	}

	public function getCreatedAtAttribute($value)
	{
		return date('Y-m-d H:i:s', strtotime($value));
	}

	public function getTahunAttribute()
	{
		return date('Y', strtotime($this->created_at));
	}
}
