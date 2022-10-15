@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Guru</h1>
    <h5>Tambah Data Guru</h5>
    <div class="line-custom"></div>

    <form action="{{ url('guru/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" />
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control" name="nip" />
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" />
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
