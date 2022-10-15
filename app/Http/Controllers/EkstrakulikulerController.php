<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        $pegawai = Pegawai::all();
        return view('ekstrakulikuler.index',compact('ekstrakulikuler','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        $pegawai = Pegawai::all();
        return view('ekstrakulikuler.create',compact('ekstrakulikuler','pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Ekstrakulikuler();
        $data->nama = $request->nama;
        $data->pegawai_id = $request->pembina;
        
        $data->save();
        return redirect('ekstrakulikuler')->with('inserted','Data Berhasil Ditambahkan');
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
        $data = Ekstrakulikuler::find($id);
        $pegawai = Pegawai::all();
        return view('ekstrakulikuler.edit',compact('data','pegawai'));
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
        $data =  Ekstrakulikuler::find($id);
        $data->nama = $request->nama;
        $data->pegawai_id = $request->pembina;
        
        $data->save();
        return redirect('ekstrakulikuler')->with('updated','Data Berhasil Diperbarui');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ekstrakulikuler::find($id);
        $data->delete();

        return redirect('ekstrakulikuler')->with('deleted','Data Berhasil Dihapus');
    }
}