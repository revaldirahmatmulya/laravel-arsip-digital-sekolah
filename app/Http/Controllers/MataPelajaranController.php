<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Guru;

use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelajaran = MataPelajaran::all();
        $guru = Guru::all();
        return view('mata_pelajaran.index', compact('pelajaran','guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $data = MataPelajaran::all();
        
        return view('mata_pelajaran.create', compact('data','guru'));
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
        // MataPelajaran::create($data);
        $data = new MataPelajaran();
        $data->nama = $request->nama;
        $data->jurusan = $request->jurusan;
        $data->guru_id = $request->pengajar;
        $data->save();
        return redirect('mapel')->with('inserted','Data Berhasil Ditambahkan');
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
        $data =MataPelajaran::find($id);
        $guru = Guru::all();
        return view('mata_pelajaran.edit',compact('data','guru'));
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
        $data =  MataPelajaran::find($id);
        $data->update($request->all());

        return redirect('mapel')->with('updated','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  MataPelajaran::find($id);
        $data->delete();

        return redirect('mapel')->with('deleted','Data Berhasil Dihapus');
    }
}