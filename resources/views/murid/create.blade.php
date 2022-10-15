@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Murid</h1>
    <h5>Tambah Data Murid</h5>
    <div class="line-custom"></div>

    <form action="{{ url('murid/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Murid</label>
                    <input type="text" class="form-control" name="nama" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Jurusan </label>
                    <select name="jurusan" class="form-select" id="">
                        <option value="ipa">Ilmu Pengetahuan Alam</option>
                        <option value="ips">Ilmu Pengetahuan Sosial</option>
                        <option value="bahasa">Ilmu Bahasa dan Budaya</option>

                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Kelamin</label>
                    <select name="kelamin" class="form-select" id="">
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Ekstrakulikuler</label>
                    <select name="ekstrakulikuler" id="" class="form-select">
                        @foreach ($ekstrakulikuler as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Organisasi</label>
                    <select name="organisasi" id="" class="form-select">
                        @foreach ($organisasi as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Golongan SPP</label>
                    <select name="spp" id="" class="form-select">
                        @foreach ($spp as $item)
                            <option value="{{ $item->id }}">{{ $item->golongan }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="kelas" id="" class="form-select">
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
        <button type="submit" class="btn btn-dark" name="kirim">
            Submit
        </button>
    </form>
@endsection
