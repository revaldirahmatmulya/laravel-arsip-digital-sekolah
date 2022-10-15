@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Kelas</h1>
    <h5>Tambah Data Kelas</h5>
    <div class="line-custom"></div>
    <form action="{{ url('kelas/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" name="nama" />
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan </label>
            <select name="jurusan" class="form-select" id="">
                <option value="ipa">Ilmu Pengetahuan Alam</option>
                <option value="ips">Ilmu Pengetahuan Sosial</option>
                <option value="bahasa">Ilmu Bahasa dan Budaya</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Wali Kelas</label>
            <select name="wali" id="" class="form-select">
                @foreach ($guru as $item)
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
