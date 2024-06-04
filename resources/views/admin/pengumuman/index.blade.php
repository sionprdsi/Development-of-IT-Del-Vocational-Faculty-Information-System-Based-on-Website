@extends('layouts.admin')

@section('main-content')
    <style>
        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }
    </style>

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Pengumuman Fakultas Vokasi') }}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Pengumuman</li>
            </ol>
        </nav>
    </div>

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
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Data Pengumuman</h6>
            <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-light btn-sm">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Pengumuman
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pengumuman</th>
                            <th>Detail</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pengumumans as $pengumuman)
                            <tr class="data-row">
                                <td>{{ $no++ }}</td>
                                <td>{{ $pengumuman->judul }}</td>
                                <td>{!! \Illuminate\Support\Str::limit(strip_tags($pengumuman->konten), 50) !!}</td>
                                <td>{{ $pengumuman->tanggal }}</td>
                                <td>{{ $pengumuman->keterangan }}</td>
                                <td>
                                    @if ($pengumuman->foto)
                                        <img src="{{ Storage::url($pengumuman->foto) }}" alt="Foto Pengumuman"
                                            class="img-thumbnail" width="100">
                                    @endif
                                </td>
                                <td class="action-buttons">
                                    <a href="{{ route('admin.pengumuman.edit', $pengumuman->id) }}" class="btn btn-primary btn-sm edit-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal{{ $pengumuman->id }}" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteConfirmationModal{{ $pengumuman->id }}" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel{{ $pengumuman->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteConfirmationModalLabel{{ $pengumuman->id }}">Konfirmasi Hapus</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus pengumuman ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <form action="{{ route('admin.pengumuman.destroy', $pengumuman->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <style>
                                .action-buttons .delete-form {
                                    display: none;
                                }

                                .data-row:hover .action-buttons .delete-form {
                                    display: inline;
                                }

                                .action-buttons .btn {
                                    padding: 0.2rem 0.5rem;
                                }
                            </style>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $pengumumans->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $pengumumans->previousPageUrl() }}">Previous</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Page {{ $pengumumans->currentPage() }} of {{ $pengumumans->lastPage() }}</a>
                    </li>
                    <li class="page-item {{ $pengumumans->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $pengumumans->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
