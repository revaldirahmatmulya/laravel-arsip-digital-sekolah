@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Kartu Perpustakaan</h1>
    <h5>Tambah Data Kartu Perpustakaan</h5>
    <div class="line-custom"></div>

    <form action="{{ url('kartu-perpustakaan/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nomor Kartu Perpustakaan</label>
            <input type="text" class="form-control" name="nomor" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Nama Murid</label>
            <select name="nama_murid" id="" class="form-select">
                @foreach ($murid as $item)
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
