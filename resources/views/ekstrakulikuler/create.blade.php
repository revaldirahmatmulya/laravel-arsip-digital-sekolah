@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Ekstrakulikuler</h1>
    <h5>Tambah Data Ekstrakulikuler</h5>
    <div class="line-custom"></div>

    <form action="{{ url('ekstrakulikuler/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Ekstrakulikuler</label>
            <input type="text" class="form-control" name="nama" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Pembina Ekstrakulikuler</label>
            <select name="pembina" id="" class="form-select">
                @foreach ($pegawai as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach

            </select>
        </div>


        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
