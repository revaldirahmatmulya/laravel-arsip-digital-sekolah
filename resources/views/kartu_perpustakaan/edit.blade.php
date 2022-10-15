@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Kartu Perpustakaan</h1>
    <h5>Ubah Data Kartu Perpustakaan</h5>
    <div class="line-custom"></div>

    <form action="/kartu-perpustakaan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nomor Kartu Perpustakaan</label>
            <input type="text" class="form-control" name="nomor_kartu" value="{{ $data->nomor_kartu }}" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Nama Murid</label>
            <select name="murid_id" id="" class="form-select">

                @foreach ($murid as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $data->murid_id) selected @endif>
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
