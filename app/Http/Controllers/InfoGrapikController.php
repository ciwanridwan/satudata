<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoGrapik;
use App\Province;
use App\City;
use DecryptException;
use Crypt;
use DB;

class InfoGrapikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $year = null)
    {
        $query = new InfoGrapik;
        // $data['years'] = InfoGrapik::select(DB::raw('year(created_at) as year'))->groupBy(DB::raw('year(created_at)'))->pluck('year');
        $data['years'] = InfoGrapik::select(DB::raw('year(created_at) as year'))->orderBy('created_at', 'desc')->pluck('year');
        // $data['years'] = InfoGrapik::orderBy('created_at', 'desc')->get();
        // dd($data);
        if ($year) {
            $data['year'] = $year;
            if(date('Y', strtotime($year)) == '1970') {
                return redirect()->back()->withInput();
            }
        }
        if ($request->q) {
            foreach (explode(' ', $request->q) as $key => $value) {
                foreach (\Schema::getColumnListing('info_grapiks') as $key1 => $value1) {
                    $query = $query->orWhere($value1, 'like', '%' . $value . '%');
                    if ($year) {
                        $query = $query->whereYear('created_at', $year);
                    }
                }
            }
        } else {
            if ($year) {
                $query = $query->whereYear('created_at', $year);
            }
        }
        $data['total'] = $query->count();
        $data['infographics'] = $query->paginate(9);

        return view('pages.infograpik')->with($data);
    }

    public function details($id)
    {
        try {
            $id = Crypt::decryptString($id);
        } catch (Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->withInput();
        }
        $infographic = InfoGrapik::find($id);
        if (!$infographic) {
            return redirect()->back()->withInput();
        }
        $data['infographic'] = (object)$infographic->toArray();
        $data['infographics'] = InfoGrapik::where('id', '!=', $id)->orderBy('created_at', 'desc')->limit(3)->get()->toArray();

        return view('pages.details.infograpik')->with($data);
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
