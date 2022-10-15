@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Ekstrakulikuler</h1>
    <div class="line-custom"></div>
    <a href="{{ url('ekstrakulikuler/create') }}"><button type="button" class="btn btn-dark mb-3">
            Tambahkan Data Ektrakulikuler
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
                    <th scope="col">Nama Ekstrakulikuler</th>
                    <th scope="col">Pembina Ekstrakulikuler</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ekstrakulikuler as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->pegawai->nama }}</td>


                        <td>

                            <a href="{{ url('ekstrakulikuler/' . $item->id . '/edit') }}">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <a href="{{ url('ekstrakulikuler/' . $item->id . '/delete') }}">
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
