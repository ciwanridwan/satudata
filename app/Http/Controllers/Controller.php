<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Data;
use App\InfoGrapik;
use App\Publikasi;
use View;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$news_flash = [];
		$get_data = Data::orderBy('created_at', 'desc')->first();
		if ($get_data) {
			$news_flash[] = (object)['title' => $get_data->judul, 'url' => route('page-data-details', $get_data->judul)];
		}
		$get_infographic = InfoGrapik::orderBy('created_at', 'desc')->first();
		if ($get_infographic) {
			$news_flash[] = (object)['title' => $get_infographic->judul, 'url' => route('pages.detail.infograpik', $get_infographic->id)];
		}
		$get_publication = Publikasi::orderBy('created_at', 'desc')->first();
		if ($get_publication) {
			$news_flash[] = (object)['title' => $get_publication->judul, 'url' => route('pages-publikasi')];
		}
		$data['news_flash'] = $news_flash;

		View::share($data);
	}
}
