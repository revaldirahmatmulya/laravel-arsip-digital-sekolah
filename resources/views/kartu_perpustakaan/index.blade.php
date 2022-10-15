@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Kartu Perpustakaan</h1>
    <div class="line-custom"></div>
    <a href="{{ url('kartu-perpustakaan/create') }}"><button type="button" class="btn btn-dark mb-3">
            Tambahkan Data Kartu Perpustakaan
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
                    <th scope="col">Nomor Kartu Perpustakaan</th>
                    <th scope="col">Nama Murid</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($kartuPerpustakaan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nomor_kartu }}</td>
                        <td>{{ $item->murid->nama }}</td>


                        <td>

                            <a href="{{ url('kartu-perpustakaan/' . $item->id . '/edit') }}">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <a href="{{ url('kartu-perpustakaan/' . $item->id . '/delete') }}">
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
