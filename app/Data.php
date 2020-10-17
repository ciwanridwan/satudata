<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\Ketenagakerjaan;

class Data extends Model
{
	protected $hidden = ['id','updated_at'];
	protected $appends = ['tahun'];

	public static function search($query, $category = null, $request)
	{
		$model = new self;
		if (!empty($category)) {
			$category = str_replace('-', ' ', $category);
			$id = Ketenagakerjaan::where('nama', 'like', '%' . $category . '%')->value('id');
		}
		if (!empty($category) && empty($query)) {
			$model = $model->where('ketenagakerjaan_id', $id);
		}
		if ($query) {
			$query = explode(' ', $query);
			foreach ($query as $key1 => $value1) {
				foreach (self::getColumns() as $key => $value) {
					if ($key == 0) {
						$model = $model->orWhere($value, 'like', '%' . $value1 . '%');
						if(!empty($category)) {
							$model = $model->where('ketenagakerjaan_id', $id);
						}
					} else {
						$model = $model->orWhere($value, 'like', '%' . $value1 . '%');
						if(!empty($category)) {
							$model = $model->where('ketenagakerjaan_id', $id);
						}
					}
				}
			}
		}
		$return['total'] = $model->count();
		$sort = 'desc';
		if (!empty($request->sort) && in_array($request->sort, ['asc','desc'])) {
			$sort = $request->sort;
		}
		$return['data'] = $model->orderBy('created_at', $sort)->orderBy('judul', 'asc')
		->paginate(10);
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
