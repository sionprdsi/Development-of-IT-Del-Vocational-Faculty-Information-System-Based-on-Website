@extends('layouts.admin')

@section('main-content')
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

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Program Studi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Program Studi</li>
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

    <!-- DataTales Example -->
    <div class="card border-0 rounded-3 shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Program Studi</h5>
            <a href="{{ route('admin.prodi.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Program Studi
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($prodi as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <a href="{{ route('admin.prodi.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.prodi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
