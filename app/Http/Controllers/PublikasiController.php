<?php

namespace App\Http\Controllers;

use App\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->back = false;
        $year = request('year');
        if (!empty($year)) {
            $years = Publikasi::select(DB::raw('year(created_at) as year'))->groupBy(DB::raw('year(created_at)'))->pluck('year')->toArray();
            if (!in_array($year, $years)) {
                $this->back = true;
            }
        }
    }

    public function index(Request $request, $query = null, $category = null)
    {
        if ($this->back) {
            return redirect()->back();
        }
        if (!empty($request->q)) {
            return redirect(url('publikasi/' . $request->q . '?year=' . $request->year));
        } else if($request->has('q') && empty($request->q)) {
            return redirect(url('publikasi' . '?year=' . $request->year));
        } else if($request->has('year') && empty($request->year)) {
            if($query) {
                return redirect(url('publikasi/' . $query));
            }
            return redirect(url('publikasi'));
        }
        $data['query'] = null;
        if (!empty($query)) {
            $data['query'] = $query;
        }
        $data['years'] = Publikasi::select(DB::raw('year(created_at) as year'))->groupBy(DB::raw('year(created_at)'))->pluck('year');
        list($data['publications'], $data['total']) = Publikasi::search($query, null, $request);
        return view('pages.publikasi')->with($data);
    }

    public function year(Request $request, $category = null, $query = null)
    {
        if ($this->back) {
            return redirect()->back();
        }
        if (!empty($request->q)) {
            return redirect(url('publikasi-' . $category . '/' . $request->q . '?year=' . $request->year));
        } else if($request->has('q') && empty($request->q)) {
            return redirect(url('publikasi-' . $category . '?year=' . $request->year));
        } else if($request->has('year') && empty($request->year)) {
            if($query) {
                return redirect(url('publikasi-' . $category . '/' . $query));
            }
            return redirect(url('publikasi-' . $category));
        }
        $data['query'] = null;
        if (!empty($query)) {
            $data['query'] = $query;
        }
        $data['years'] = Publikasi::select(DB::raw('year(created_at) as year'))->groupBy(DB::raw('year(created_at)'))->pluck('year');
        list($data['publications'], $data['total']) = Publikasi::search($query, $category, $request);
        return view('pages.publikasi')->with($data);
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
