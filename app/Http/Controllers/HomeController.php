<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use App\Data;
use App\InfoGrapik;
use App\Publikasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(!empty($request->q)) return redirect(url('data/' . $request->q));

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

        $data['latest_galeries'] = Galery::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index')->with($data);
    }
}
