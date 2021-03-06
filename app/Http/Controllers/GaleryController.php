<?php

namespace App\Http\Controllers;

use App\Galery;
use App\GaleryLog;
use App\KategoriGalery;
use App\Gambar;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function details($judul, Request $request)
    {
        $galery = Galery::where('judul', $judul)->first();
        if (!$galery) {
            return redirect()->back()->withInput();
        }

        // Add galery log
        $galeryLog = new GaleryLog();
        $galeryLog->galery_id = $galery->id;
        $galeryLog->save();

        $data['galery'] = $galery;
        $data['images'] = Gambar::where('galery_id', $galery->id)->get();
        $data['latest_galeries'] = Galery::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.details.galery')->with($data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galeries']  = Galery::orderBy('created_at', 'desc')->paginate(9);
        $data['popular_galeries'] = Galery::orderBy('created_at', 'asc')->paginate(9);

        return view('pages.galery')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
