@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Mata Pelajaran</h1>
    <h5>Ubah Data Mata Pelajaran</h5>
    <div class="line-custom"></div>

    <form action="/mapel/{{ $data->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" />
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan </label>
            <select name="jurusan" class="form-select" id="">
                <option value="ipa" @if ($data->jurusan == 'ipa') selected @endif>Ilmu Pengetahuan Alam</option>
                <option value="ips" @if ($data->jurusan == 'ips') selected @endif>Ilmu Pengetahuan Sosial</option>
                <option value="bahasa" @if ($data->jurusan == 'bahasa') selected @endif>Ilmu Bahasa dan Budaya</option>

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Pengajar</label>
            <select name="guru_id" id="" class="form-select">

                @foreach ($guru as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $data->guru_id) selected @endif>
                        {{ $item->nama }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
