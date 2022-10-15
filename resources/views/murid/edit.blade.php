@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Murid</h1>
    <h5>Ubah Data Murid</h5>
    <div class="line-custom"></div>

    <form action="/murid/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Nama Murid</label>
                    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" value="{{ $data->nisn }}" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Jurusan </label>
                    <select name="jurusan" class="form-select" id="">
                        <option value="ipa" @if ($data->jurusan == 'ipa') selected @endif>Ilmu Pengetahuan Alam</option>
                        <option value="ips" @if ($data->jurusan == 'ips') selected @endif>Ilmu Pengetahuan Sosial
                        </option>
                        <option value="bahasa" @if ($data->jurusan == 'bahasa') selected @endif>Ilmu Bahasa dan Budaya
                        </option>

                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Kelamin</label>
                    <select name="kelamin" class="form-select" id="">
                        <option value="laki-laki" @if ($data->kelamin == 'laki-laki') selected @endif>Laki - Laki</option>
                        <option value="perempuan" @if ($data->kelamin == 'perempuan') selected @endif>Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Ekstrakulikuler</label>
                    <select name="ekstrakulikuler_id" id="" class="form-select">

                        @foreach ($ekstrakulikuler as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $data->ekstrakulikuler_id) selected @endif>
                                {{ $item->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Organisasi</label>
                    <select name="organisasi_id" id="" class="form-select">

                        @foreach ($organisasi as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $data->organisasi_id) selected @endif>
                                {{ $item->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Golongan SPP</label>
                    <select name="spp_id" id="" class="form-select">
                        @foreach ($spp as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $data->spp_id) selected @endif>
                                {{ $item->golongan }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="kelas_id" id="" class="form-select">

                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $data->kelas_id) selected @endif>
                                {{ $item->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" />
                </div>
            </div>
        </div>
        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection
