@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Pegawai</h1>
    <h5>Tambah Data Pegawai</h5>
    <div class="line-custom"></div>

    <form action="{{ url('pegawai/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" name="posisi" />
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="number" class="form-control" name="gaji" />
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" />
        </div>
        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark" name="kirim">
            Submit
        </button>
    </form>
@endsection
