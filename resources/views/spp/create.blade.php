@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman SPP</h1>
    <h5>Tambah Data SPP</h5>
    <div class="line-custom"></div>
    <form action="{{ url('spp/store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Golongan </label>
            <select name="golongan" class="form-select" id="">
                <option value="S">Golongan S</option>
                <option value="A">Golongan A</option>
                <option value="B">Golongan B</option>
                <option value="C">Golongan C</option>
                <option value="D">Golongan D</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Harga </label>
            <input type="number" name="harga" class="form-control" />
        </div>

        <div class="mb-3 form-check"></div>
        <button type="submit" name="kirim" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
