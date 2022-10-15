@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Guru</h1>
    <h5>Tampilkan Data Guru</h5>
    <div class="line-custom"></div>

    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('/berkas-gambar/' . $data->foto) }}" alt="" class="foto">
        </div>

        <div class="col-lg-6">
            <ul class="text-show-list">
                <li>
                    <h4>Nama :</h4>
                    <p> {{ $data->nama }}</p>
                </li>
                <li>
                    <h4>NIP : </h4>
                    <p>{{ $data->nip }}</p>
                </li>
                <li>
                    <h4>Jabatan : </h4>
                    <p>{{ $data->jabatan }}</p>
                </li>
            </ul>


        </div>
    </div>
@endsection
