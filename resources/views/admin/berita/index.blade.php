@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Berita Fakultas Vokasi') }}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Berita Vokasi</li>
            </ol>
        </nav>
    </div>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Custom CSS for modern card layout -->
    <style>
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .card-header {
            background-color: #4C74DC;
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-body {
            padding: 2rem;
        }

        .table-responsive {
            margin-top: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn {
            margin: 0.5rem 0.25rem;
            /* Adjusted button margin */
        }

        .btn-warning,
        .btn-danger {
            color: white;
        }


        .btn-primary:focus,
        .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            /* Green shadow on focus */
        }

        .title-label {
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }
    </style>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Berita</h5>
            <a href="{{ route('admin.berita.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Berita
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($berita as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>
                                    <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('admin.berita.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $berita->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $berita->previousPageUrl() }}">Previous</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Page {{ $berita->currentPage() }} of {{ $berita->lastPage() }}</a>
                    </li>
                    <li class="page-item {{ $berita->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $berita->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
