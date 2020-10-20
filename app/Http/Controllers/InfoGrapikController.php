<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoGrapik;
use App\Province;
use App\City;
use Crypt;
use DB;

class InfoGrapikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $province = null, $city = null, $year = null)
    {
        // dd($request->all(), $province, $city, $year);
        $query = new InfoGrapik;
        if ($province) {
            $data['province_id'] = $province;
            $province = Crypt::decryptString($province);
            $data['province'] = Province::find($province)->name;
            if (empty($request->q)) {
                $query = $query->where('province_id', $province);
            }
            $data['cities'] = City::where('province_id', $province)->get()->toArray();
        }
        if ($city) {
            $data['city_id'] = $city;
            $city = Crypt::decryptString($city);
            $data['city'] = City::find($city)->name;
            if (empty($request->q)) {
                $query = $query->where('city_id', $city);
            }
            $data['years'] = InfoGrapik::select(DB::raw('year(created_at) as year'))->groupBy(DB::raw('year(created_at)'))->pluck('year');
        }
        if ($year) {
            $data['year'] = $year;
        }
        if ($request->q) {
            foreach (explode(' ', $request->q) as $key => $value) {
                foreach (\Schema::getColumnListing('info_grapiks') as $key1 => $value1) {
                    $query = $query->orWhere($value1, 'like', '%' . $value . '%');
                    if ($province) {
                        $query = $query->where('province_id', $province);
                    }
                    if ($city) {
                        $query = $query->where('city_id', $city);
                    }
                }
            }
        }
        $data['total'] = $query->count();
        $data['infographics'] = $query->paginate(9);
        $data['provinces'] = Province::all()->toArray();
        // dd($data);

        return view('pages.infograpik')->with($data);
    }

    public function details()
    {
        return view('pages.details.infograpik');
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
