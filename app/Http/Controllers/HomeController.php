<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Guru;
use App\Models\KartuPerpustakaan;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Murid;
use App\Models\Organisasi;
use App\Models\Pegawai;
use App\Models\Spp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $murid = Murid::count();
        $guru = Guru::count();
        $pegawai = Pegawai::count();
        $ekstrakulikuler = Ekstrakulikuler::count();
        $organisasi = Organisasi::count();
        $kartuPerpustakaan = KartuPerpustakaan::count();
        $mapel = MataPelajaran::count();
        $spp = Spp::count();
        $kelas = Kelas::count();
        return view('home.index',compact('murid','guru','pegawai','ekstrakulikuler','organisasi','kartuPerpustakaan','mapel','spp','kelas'));
    }
}