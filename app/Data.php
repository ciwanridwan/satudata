<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\Ketenagakerjaan;
use DB;

class Data extends Model
{
	protected $hidden = ['id','updated_at'];
	protected $appends = ['tahun','format_berkas','size_files'];

	public static function search($query, $category = null, $request)
	{
		$model = new self;
		if (!empty($category)) {
			$category = str_replace('-', ' ', $category);
			$id = Ketenagakerjaan::where(DB::raw('replace(nama, "-", " ")'), $category)->value('id');
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

	public function getFormatBerkasAttribute()
	{
		return pathinfo($this->file, PATHINFO_EXTENSION);
	}

	public function getSizeFilesAttribute($value)
	{
		if (!empty($value)) {
			return $value;
		}

		$file = public_path('files/' . $this->file);
		if (file_exists($file)) {
			$size = filesize($file);

			if ($size >= 1073741824) {
				$size = number_format($size / 1073741824, 2) . 'GB';
			} elseif ($size >= 1048576) {
				$size = number_format($size / 1048576, 2) . ' MB';
			} elseif ($size >= 1024) {
				$size = number_format($size / 1024, 2) . ' KB';
			} elseif ($size > 1) {
				$size = $size . ' bytes';
			} elseif ($size == 1) {
				$size = $size . ' byte';
			} else {
				$size = '0 bytes';
			}

			$update = self::where('id', $this->id)->first();
			$update->size_files = $size;
			$update->update();

			return $size;
		}
	}
}
