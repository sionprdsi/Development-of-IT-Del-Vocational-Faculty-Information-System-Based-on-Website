@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Gambar Galeri Halaman Beranda Kampus') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Galeri</li>
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

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

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

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn {
            margin: 0 0.25rem;
        }

        .btn-warning, .btn-danger {
            color: white;
        }
    </style>


    <div class="card shadow" style="border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 1.5rem;">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Galeri</h5>
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Galeri
            </a>
        </div>
        <div class="card-body" style="padding: 2rem;">
            <div class="table-responsive" style="margin-top: 1rem;">
                <table class="table table-bordered table-hover" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ Storage::url($gallery->foto) }}" alt="Galeri" width="200px" class="img-fluid rounded">
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('admin.galeri.destroy', $gallery->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus gambar ini?')">
                                            <i class="fas fa-trash"></i> Hapus
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
                    <li class="page-item {{ $galleries->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $galleries->previousPageUrl() }}">Previous</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Page {{ $galleries->currentPage() }} of {{ $galleries->lastPage() }}</a>
                    </li>
                    <li class="page-item {{ $galleries->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $galleries->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
