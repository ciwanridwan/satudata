<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Publikasi extends Model
{
	protected $appends = ['date','size_file'];

	public static function search($query, $year = null, $request)
	{
		$model = new self;
		if (!empty($request->year) && empty($query)) {
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
		// dd($model->get()->toArray());
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

	public function getSizeFileAttribute()
	{
		$file_size = filesize(public_path('files/'. $data->file));

		if ($file_size >= 1073741824) {
			$file_size = number_format($file_size / 1073741824, 2).'GB';
		}
		elseif ($file_size >= 1048576) {
			$file_size = number_format($file_size / 1048576, 2) . ' MB';
		}
		elseif ($file_size >= 1024) {
			$file_size = number_format($file_size / 1024, 2) . ' KB';
		}
		elseif ($file_size > 1) {
			$file_size = $file_size . ' bytes';
		}
		elseif ($file_size == 1) {
			$file_size = $file_size . ' byte';
		}
		else {
			$file_size = '0 bytes';
		}

		return $file_size;
	}
}
