@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Murid</h1>
    <div class="line-custom"></div>
    <a href="{{ url('murid/create') }}"><button type="button" class="btn btn-dark mb-3">
            Tambahkan Data Murid
        </button>
    </a>

    @if ($message = Session::get('inserted'))
        <div class="alert alert-success alert-dismissible fade show mb-3 mt-3" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif ($message = Session::get('updated'))
        <div class="alert alert-primary alert-dismissible fade show mb-3 mt-3" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif ($message = Session::get('deleted'))
        <div class="alert alert-danger alert-dismissible fade show mb-3 mt-3" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Ekstrakulikuler</th>
                    <th scope="col">Organisasi</th>
                    <th scope="col">Golongan SPP</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($murid as $item)
                    <tr>
                        {{ dd($item) }}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->kelamin }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->ekstrakulikuler->nama }}</td>
                        <td>{{ $item->organisasi->nama }}</td>
                        <td>{{ $item->spp->golongan }}</td>
                        <td>{{ $item->kelas->nama }}</td>


                        <td>
                            <a href="{{ url('murid/' . $item->id . '/show') }}"><button type="button"
                                    class="btn btn-primary">
                                    <i class="far fa-eye"></i>
                                </button>
                            </a>

                            <a href="{{ url('murid/' . $item->id . '/edit') }}">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <a href="{{ url('murid/' . $item->id . '/delete') }}">
                                <button type="button" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
