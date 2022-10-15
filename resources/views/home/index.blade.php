@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Utama</h1>
    <div class="line-custom"></div>
    <div class="row">
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Murid</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $murid }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Guru</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $guru }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Pegawai</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $pegawai }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Organisasi</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $organisasi }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Ekstrakulikuler</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $ekstrakulikuler }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Mata Pelajaran</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $mapel }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="square-box">
                <h4>SPP</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $spp }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4 style="font-size: 25px !important">Kartu Perpustakaan</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $kartuPerpustakaan }}</h3>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="square-box">
                <h4>Kelas</h4>
                <div class="inner-line-wrap">
                    <div class="inner-1"></div>
                    <div class="inner-2"></div>
                </div>
                <h3>{{ $kelas }}</h3>
            </div>
        </div>
    </div>
@endsection

{{-- <h1>Anda Sudah Login !</h1> --}}
{{-- <form action="{{ url('/logout') }} " method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form> --}}
{{-- <a href="{{ route('logout') }}">
    <button type="submit" class="btn btn-danger">Logout</button>
</a> --}}
