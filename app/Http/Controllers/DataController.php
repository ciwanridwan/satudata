<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketenagakerjaan;
use App\Data;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function dataDownloader($judul)
    {
        $totalDownload = Data::where('judul', $judul)->first();
        $totalDownload->increment('total_download');
        return response()->json($totalDownload);
    }

    public function unduhFile($file)
    {
        $file = Data::where('file', $file)->first();
        return response()->download(asset('storage/app/public/files/' . $file->file));
        // $path = Storage::disk('public')->get($file);
        // return response()->download($path);
        // $file_path = public_path('files/' . $file);
        // return response()->download($file_path);
    }
    public function details($judul)
    {
        $data = Data::where('judul', $judul)->first();
        // $totalDownload = $data->increment('total_download');
        return view('pages.details.data')->with('data', $data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $query = null, $category = null)
    {
        if (!empty($request->q)) {
            return redirect(url('data/' . $request->q . '?sort=' . $request->sort));
        }
        $data['query'] = null;
        if (!empty($query)) {
            $data['query'] = $query;
        }
        $employments = Ketenagakerjaan::groupBy('kategori')->orderBy('kategori', 'desc')->pluck('kategori');
        foreach ($employments as $key => $employment) {
            $data['employment'][$employment] = Ketenagakerjaan::where('kategori', $employment)->orderBy('nama', 'asc')->get()->toArray();
        }
        $data['years'] = Data::select(DB::raw('year(created_at) as year'), DB::raw('count(*) as count'))->groupBy(DB::raw('year(created_at)'))->get();
        list($data['datas'], $data['total']) = Data::search($query, null, $request);
        return view('pages.dataset')->with($data);
    }

    public function category(Request $request, $category = null, $query = null)
    {
        if (!empty($request->q)) {
            return redirect(url('data-' . $category . '/' . $request->q . '?sort=' . $request->sort));
        }
        $data['query'] = null;
        if (!empty($query)) {
            $data['query'] = $query;
        }
        $employments = Ketenagakerjaan::groupBy('kategori')->orderBy('kategori', 'desc')->pluck('kategori');
        foreach ($employments as $key => $employment) {
            $data['employment'][$employment] = Ketenagakerjaan::where('kategori', $employment)->orderBy('nama', 'asc')->get()->toArray();
        }
        $data['years'] = Data::select(DB::raw('year(created_at) as year'), DB::raw('count(*) as count'))->groupBy(DB::raw('year(created_at)'))->get();
        list($data['datas'], $data['total']) = Data::search($query, $category, $request);
        return view('pages.dataset')->with($data);
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
