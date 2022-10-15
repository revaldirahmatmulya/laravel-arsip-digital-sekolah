<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Guru;


class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasi = Organisasi::all();
        $guru = Guru::all();
        return view('organisasi.index', compact('organisasi','guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $organisasi = Organisasi::all();
        
        return view('organisasi.create', compact('organisasi','guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data =  $request->all();
        // Organisasi::create($data);
        $data = new Organisasi();
        $data->nama = $request->nama;
        $data->guru_id = $request->pembina;
        $data->save();
        return redirect('organisasi')->with('inserted','Data Berhasil Ditambahkan');
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
        $data =Organisasi::find($id);
        $guru = Guru::all();
        return view('organisasi.edit',compact('data','guru'));
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
        $data =  Organisasi::find($id);
        $data->update($request->all());

        return redirect('organisasi')->with('updated','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Organisasi::find($id);
        $data->delete();

        return redirect('organisasi')->with('deleted','Data Berhasil Dihapus');
    }
}