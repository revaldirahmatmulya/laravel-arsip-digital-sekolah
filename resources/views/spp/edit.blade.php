@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman SPP</h1>
    <h5>Ubah Data SPP</h5>
    <div class="line-custom"></div>
    <form action="/spp/{{ $data->id }}" method="POST">
        @method('put')
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">Golongan </label>
            <select name="golongan" class="form-select" id="">
                {{-- <option selected>{{ $data->golongan }}</option> --}}
                <option value="S" @if ($data->golongan == 'S') selected @endif>Golongan S</option>
                <option value="A" @if ($data->golongan == 'A') selected @endif>Golongan A</option>
                <option value="B" @if ($data->golongan == 'B') selected @endif>Golongan B</option>
                <option value="C" @if ($data->golongan == 'C') selected @endif>Golongan C</option>
                <option value="D" @if ($data->golongan == 'D') selected @endif>Golongan D</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Harga </label>
            <input type="number" name="harga" class="form-control" value="{{ $data->harga }}" />
        </div>

        <div class="mb-3 form-check"></div>
        <button type="submit" name="kirim" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
