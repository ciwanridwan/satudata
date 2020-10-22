<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;

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

        $data['latest_galeries'] = Galery::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index')->with($data);
    }
}
