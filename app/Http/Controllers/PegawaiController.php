<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Pegawai;
        return view('pegawai.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Pegawai();
        $data->nama = $request->nama;
        $data->posisi = $request->posisi;
        $data->gaji = $request->gaji;
        $filename = time().'.'. $request->foto->extension();
        $data->foto = $filename;
        $request->foto->move(public_path('berkas-gambar'), $filename);
        $data->save();
        return redirect('pegawai')->with('inserted','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pegawai::find($id);
        return view('pegawai.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Pegawai::find($id);
        return view('pegawai.edit',compact('data'));
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
        $data =  Pegawai::find($id);
        $data->nama = $request->nama;
        $data->posisi = $request->posisi;
        $data->gaji = $request->gaji;
        $filename = time().'.'. $request->foto->extension();
        $data->foto = $filename;
        $request->foto->move(public_path('berkas-gambar'), $filename);
        $data->save();

        return redirect('pegawai')->with('updated','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect('pegawai')->with('deleted','Data Berhasil Dihapus');
    }
}