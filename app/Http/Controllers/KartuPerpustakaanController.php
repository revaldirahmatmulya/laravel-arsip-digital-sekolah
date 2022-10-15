<?php

namespace App\Http\Controllers;

use App\Models\KartuPerpustakaan;
use App\Models\Murid;
use Illuminate\Http\Request;

class KartuPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartuPerpustakaan = KartuPerpustakaan::all();
        $murid = Murid::all();
        return view('kartu_perpustakaan.index', compact('kartuPerpustakaan','murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $murid = Murid::all();
        $data = KartuPerpustakaan::all();
        
        return view('kartu_perpustakaan.create', compact('data','murid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new KartuPerpustakaan();
        $data->nomor_kartu = $request->nomor;
        $data->murid_id = $request->nama_murid;
        $data->save();
        return redirect('kartu-perpustakaan')->with('inserted','Data Berhasil Ditambahkan');
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
         $data =KartuPerpustakaan::find($id);
        $murid = Murid::all();
        return view('kartu_perpustakaan.edit',compact('data','murid'));
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
        $data =  KartuPerpustakaan::find($id);
        $data->update($request->all());

        return redirect('kartu-perpustakaan')->with('updated','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  KartuPerpustakaan::find($id);
        $data->delete();

        return redirect('kartu-perpustakaan')->with('deleted','Data Berhasil Dihapus');
    }
}