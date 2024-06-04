@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Testimoni Alumni Fakultas Vokasi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Alumni</li>
            </ol>
        </nav>
    </div>

    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Notifikasi Status -->
    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
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
            margin: 0 0.25rem;
        }

        .btn-warning,
        .btn-danger {
            color: white;
        }

        .table img {
            max-width: 100px;
            height: auto;
        }
    </style>


    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif


    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Alumni</h5>
            <a href="{{ route('admin.alumni.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Alumni
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Bekerja di</th>
                            <th>Tahun Lulusan</th>
                            <th>Testimoni</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumni as $alum)
                            <tr>
                                <td>{{ $alum->id }}</td>
                                <td>{{ $alum->name }}</td>
                                <td>
                                    @if ($alum->image)
                                        <img src="{{ Storage::url($alum->image) }}" alt="Foto"
                                            style="width: 100px; height: auto;">
                                    @else
                                        Tidak ada foto
                                    @endif
                                </td>
                                <td>{{ $alum->work_at }}</td>
                                <td>{{ $alum->graduation_year }}</td>
                                <td>{{ $alum->testimonial }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm edit-btn"
                                        href="{{ route('admin.alumni.edit', $alum->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModal{{ $alum->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>

                                <!-- Delete Modal -->
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $alum->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel{{ $alum->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $alum->id }}">Konfirmasi
                                                Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.alumni.destroy', $alum->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $alumni->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $alumni->previousPageUrl() }}">Previous</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Page {{ $alumni->currentPage() }} of
                            {{ $alumni->lastPage() }}</a>
                    </li>
                    <li class="page-item {{ $alumni->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $alumni->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
