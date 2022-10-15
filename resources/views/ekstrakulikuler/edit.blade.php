@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Ekstrakulikuler</h1>
    <h5>Ubah Data Ekstrakulikuler</h5>
    <div class="line-custom"></div>

    <form action="/ekstrakulikuler/{{ $data->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Ekstrakulikuler</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Pembina Ekstrakulikuler</label>
            <select name="pembina" id="" class="form-select">

                @foreach ($pegawai as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $data->pegawai_id) selected @endif>
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
