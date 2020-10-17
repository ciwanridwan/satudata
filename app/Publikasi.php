<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Publikasi extends Model
{
	protected $appends = ['date'];

	public static function search($query, $year = null, $request)
	{
		$model = new self;
		if (!empty($request->year)) {
			$model = $model->whereYear('created_at', $request->year);
		}
		if ($query) {
			$query = explode(' ', $query);
			foreach ($query as $key1 => $value1) {
				foreach (self::getColumns() as $key => $value) {
					if ($key == 0) {
						$model = $model->orWhere($value, 'like', '%' . $value1 . '%');
						if(!empty($request->year)) {
							$model = $model->whereYear('created_at', $request->year);
						}
					} else {
						$model = $model->orWhere($value, 'like', '%' . $value1 . '%');
						if(!empty($request->year)) {
							$model = $model->whereYear('created_at', $request->year);
						}
					}
				}
			}
		}
		$return['total'] = $model->count();
		$return['data'] = $model->orderBy('created_at', 'desc')->orderBy('judul', 'asc')
		->paginate(10);
		return [$return['data'], $return['total']];
	}

	public static function getColumns()
	{
		return Schema::getColumnListing('publikasis');
	}

	public function getDateAttribute()
	{
		return date('Y-m-d', strtotime($this->created_at));
	}
}
