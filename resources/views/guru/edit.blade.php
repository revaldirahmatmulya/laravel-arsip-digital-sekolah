@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Guru</h1>
    <h5>Ubah Data Guru</h5>
    <div class="line-custom"></div>

    <form action="/guru/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" />
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control" name="nip" value="{{ $data->nip }}" />
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $data->jabatan }}" />
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" value="{{ $data->foto }}" />
        </div>
        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
