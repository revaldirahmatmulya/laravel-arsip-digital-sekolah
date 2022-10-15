@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Mata Pelajaran</h1>
    <h5>Tambah Data Mata Pelajaran</h5>
    <div class="line-custom"></div>
    <form action="{{ url('mapel/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mata Pelajaran</label>
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
            <label class="form-label">Pengajar</label>
            <select name="pengajar" id="" class="form-select">
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
