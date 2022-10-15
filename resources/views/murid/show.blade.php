@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Murid</h1>
    <h5>Tampilkan Data Murid</h5>
    <div class="line-custom"></div>

    <div class="row">
        <div class="col-lg-4">
            <img src="{{ asset('/berkas-gambar/' . $data->foto) }}" alt="" class="foto">
        </div>

        <div class="col-lg-4">
            <ul class="text-show-list">
                <li>
                    <h4>Nama : </h4>
                    <p>{{ $data->nama }}</p>
                </li>
                <li>
                    <h4>NISN : </h4>
                    <p>{{ $data->nisn }}</p>
                </li>
                <li>
                    <h4>Jurusan : </h4>
                    <p>{{ $data->jurusan }}</p>
                </li>
                <li>
                    <h4>Kelamin : </h4>
                    <p>{{ $data->kelamin }}</p>
                </li>
                <li>
                    <h4>Tanggal Lahir : </h4>
                    <p>{{ $data->tanggal_lahir }}</p>
                </li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul class="text-show-list">
                <li>
                    <h4>Ekstrakulikuler : </h4>
                    <p>{{ $data->ekstrakulikuler->nama }}</p>
                </li>
                <li>
                    <h4>Organisasi :</h4>
                    <p> {{ $data->organisasi->nama }}</p>
                </li>
                <li>
                    <h4>Golongan SPP :</h4>
                    <p> {{ $data->spp->golongan }}</p>
                </li>
                <li>
                    <h4>Kelas : </h4>
                    <p>{{ $data->kelas->nama }}</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
