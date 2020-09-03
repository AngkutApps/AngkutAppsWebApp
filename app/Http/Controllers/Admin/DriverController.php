<?php

namespace App\Http\Controllers\Admin;

use App\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('pete')) {
            $drivers = Driver::where('jenisdriver', 'pete-pete')->get();
        } elseif ($request->get('daerah')) {
            $drivers = Driver::where('jenisdriver', 'Mobil Daerah')->get();
        } elseif ($request->get('bus')) {
            $drivers = Driver::where('jenisdriver', 'Mobil Bus')->get();
        } else {
            $drivers = Driver::all();
        }
        $driversCount = Driver::all()->count();
        $peteCount = Driver::where('jenisdriver', 'pete-pete')->count();
        $daerahCount = Driver::where('jenisdriver', 'Mobil Daerah')->count();
        $busCount = Driver::where('jenisdriver', 'Mobil Bus')->count();
        return view('admin.driver.index', compact('drivers', 'peteCount', 'daerahCount', 'busCount', 'driversCount'));
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
        $driver = Driver::findOrFail($id);
        return view('admin.driver.show', compact('driver'));
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
        Driver::findOrFail($id)->delete();
        toast('Data berhasil di hapus', 'succes');
        return redirect()->back();
    }
}
