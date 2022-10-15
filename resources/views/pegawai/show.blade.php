@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Pegawai</h1>
    <h5>Tampilkan Data Pegawai</h5>
    <div class="line-custom"></div>

    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('/berkas-gambar/' . $data->foto) }}" alt="" class="foto">
        </div>

        <div class="col-lg-6">
            <ul class="text-show-list">
                <li>
                    <h4>Nama : </h4>
                    <p>{{ $data->nama }}</p>
                </li>
                <li>
                    <h4>Posisi : </h4>
                    <p>{{ $data->posisi }}</p>
                </li>
                <li>
                    <h4>Gaji : </h4>
                    <p>Rp{{ $data->gaji }}</p>
                </li>
            </ul>


        </div>
    </div>
@endsection
