<?php

use App\Models\Spp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\KartuPerpustakaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.index');
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login') ;
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//home
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');


// Route::resource('spp',SppController::class);


//guru


Route::middleware(['auth'])->group(function () {
    //spp
    Route::get('/spp', [SppController::class, 'index']);
    Route::get('/spp/create', [SppController::class, 'create']);
    Route::post('/spp/store', [SppController::class, 'store']);
    Route::get('/spp/{id}/edit', [SppController::class, 'edit']);
    Route::put('/spp/{id}', [SppController::class, 'update']);
    Route::get('/spp/{id}/delete', [SppController::class, 'destroy']);

    //guru
    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/guru/create', [GuruController::class, 'create']);
    Route::post('/guru/store', [GuruController::class, 'store']);
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit']);
    Route::put('/guru/{id}', [GuruController::class, 'update']);
    Route::get('/guru/{id}/delete', [GuruController::class, 'destroy']);
    Route::get('/guru/{id}/show', [GuruController::class, 'show']);

    //organisasi
    Route::get('/organisasi', [OrganisasiController::class, 'index']);
    Route::get('/organisasi/create', [OrganisasiController::class, 'create']);
    Route::post('/organisasi/store', [OrganisasiController::class, 'store']);
    Route::get('/organisasi/{id}/edit', [OrganisasiController::class, 'edit']);
    Route::put('/organisasi/{id}', [OrganisasiController::class, 'update']);
    Route::get('/organisasi/{id}/delete', [OrganisasiController::class, 'destroy']);

    //pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('/pegawai/store', [PegawaiController::class, 'store']);
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
    Route::get('/pegawai/{id}/delete', [PegawaiController::class, 'destroy']);
    Route::get('/pegawai/{id}/show', [PegawaiController::class, 'show']);

    //ekstrakulikuler
    Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index']);
    Route::get('/ekstrakulikuler/create', [EkstrakulikulerController::class, 'create']);
    Route::post('/ekstrakulikuler/store', [EkstrakulikulerController::class, 'store']);
    Route::get('/ekstrakulikuler/{id}/edit', [EkstrakulikulerController::class, 'edit']);
    Route::put('/ekstrakulikuler/{id}', [EkstrakulikulerController::class, 'update']);
    Route::get('/ekstrakulikuler/{id}/delete', [EkstrakulikulerController::class, 'destroy']);

    //mata pelajaran
    Route::get('/mapel', [MataPelajaranController::class, 'index']);
    Route::get('/mapel/create', [MataPelajaranController::class, 'create']);
    Route::post('/mapel/store', [MataPelajaranController::class, 'store']);
    Route::get('/mapel/{id}/edit', [MataPelajaranController::class, 'edit']);
    Route::put('/mapel/{id}', [MataPelajaranController::class, 'update']);
    Route::get('/mapel/{id}/delete', [MataPelajaranController::class, 'destroy']);

    //kelas
    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/kelas/create', [KelasController::class, 'create']);
    Route::post('/kelas/store', [KelasController::class, 'store']);
    Route::get('/kelas/{id}/edit', [KelasController::class, 'edit']);
    Route::put('/kelas/{id}', [KelasController::class, 'update']);
    Route::get('/kelas/{id}/delete', [KelasController::class, 'destroy']);
    
    //murid
    Route::get('/murid', [MuridController::class, 'index']);
    Route::get('/murid/create', [MuridController::class, 'create']);
    Route::post('/murid/store', [MuridController::class, 'store']);
    Route::get('/murid/{id}/edit', [MuridController::class, 'edit']);
    Route::put('/murid/{id}', [MuridController::class, 'update']);
    Route::get('/murid/{id}/delete', [MuridController::class, 'destroy']);
    Route::get('/murid/{id}/show', [MuridController::class, 'show']);

    //kartu perpustakaan
    Route::get('/kartu-perpustakaan', [KartuPerpustakaanController::class, 'index']);
    Route::get('/kartu-perpustakaan/create', [KartuPerpustakaanController::class, 'create']);
    Route::post('/kartu-perpustakaan/store', [KartuPerpustakaanController::class, 'store']);
    Route::get('/kartu-perpustakaan/{id}/edit', [KartuPerpustakaanController::class, 'edit']);
    Route::put('/kartu-perpustakaan/{id}', [KartuPerpustakaanController::class, 'update']);
    Route::get('/kartu-perpustakaan/{id}/delete', [KartuPerpustakaanController::class, 'destroy']);
 
    
});