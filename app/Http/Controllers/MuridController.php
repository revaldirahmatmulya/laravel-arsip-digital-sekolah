<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Organisasi;
use App\Models\Spp;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = Murid::all();
        $ekstrakulikuler = Ekstrakulikuler::all();
        $organisasi = Organisasi::all();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('murid.index', compact('murid','kelas','ekstrakulikuler','organisasi','spp',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Murid::all();
        $ekstrakulikuler = Ekstrakulikuler::all();
        $organisasi = Organisasi::all();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('murid.create', compact('data','kelas','ekstrakulikuler','organisasi','spp',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Murid();
        $data->nama = $request->nama;
        $data->nisn = $request->nisn;
        $data->jurusan = $request->jurusan;
        $data->kelamin = $request->kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->ekstrakulikuler_id = $request->ekstrakulikuler;
        $data->organisasi_id = $request->organisasi;
        $data->spp_id = $request->spp;
        $data->kelas_id = $request->kelas;
        $filename = time().'.'. $request->foto->extension();
        $data->foto = $filename;
        $request->foto->move(public_path('berkas-gambar'), $filename);
        // $data->foto = $request->foto;

        $data->save();
        return redirect('murid')->with('inserted','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Murid::find($id);
        return view('murid.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Murid::find($id);
        $ekstrakulikuler = Ekstrakulikuler::all();
        $organisasi = Organisasi::all();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('murid.edit', compact('data','kelas','ekstrakulikuler','organisasi','spp',));
     ;
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
        $data =  Murid::find($id);
         $data->nama = $request->nama;
        $data->nisn = $request->nisn;
        $data->jurusan = $request->jurusan;
        $data->kelamin = $request->kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->ekstrakulikuler_id = $request->ekstrakulikuler_id;
        $data->organisasi_id = $request->organisasi_id;
        $data->spp_id = $request->spp_id;
        $data->kelas_id = $request->kelas_id;
        $filename = time().'.'. $request->foto->extension();
        $data->foto = $filename;
        $request->foto->move(public_path('berkas-gambar'), $filename);
       

        $data->save();

        return redirect('murid')->with('updated','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Murid::find($id);
        $data->delete();

        return redirect('murid')->with('deleted','Data Berhasil Dihapus');
    }
}