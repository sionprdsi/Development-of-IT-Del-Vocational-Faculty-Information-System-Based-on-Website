@extends('layouts.admin')

@section('main-content')
    <style>
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination>li {
            display: inline-block;
            margin-right: 5px;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #333;
            border: 1px solid #ccc;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination>.active>span {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .pagination>li>a:hover {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

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
            margin: 0 0.25rem;
        }

        .btn-warning,
        .btn-danger {
            color: white;
        }
    </style>
    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Carousel Gambar Halaman Beranda Kampus') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Slider</li>
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

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Gambar Carousel Slider</h5>
            <a href="{{ route('admin.slider.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah gambar
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th style="border-top-left-radius: 10px;">#</th>
                            <th>Foto</th>
                            <th style="border-top-right-radius: 10px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($galleries->currentPage() - 1) * 5 + 1;
                        @endphp
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ Storage::url($gallery->foto) }}" alt="Slider" width="200px" class="img-fluid rounded">
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('admin.slider.destroy', $gallery->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $gallery->id }}">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $gallery->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $gallery->id }}">Konfirmasi Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus gambar ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <form action="{{ route('admin.slider.destroy', $gallery->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
