@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Mahasiswa Fakultas Vokasi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Prestasi Mahasiswa</li>
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
    </style>

    <!-- Modern Card Layout for Gallery Data -->
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Prestasi Mahasiswa</h5>
            <a href="{{ route('admin.prestasi.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Prestasi
            </a>
        </div>
        <div class="card-body">
            <!-- Filter Form -->
            <form action="{{ route('admin.prestasi') }}" method="GET" class="mb-3">
                <div class="d-flex align-items-end">
                    <div class="col-md-2 mb-2" style="padding-right: 5px;">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">Pilih Tahun</option>
                            @foreach ($prestasi->pluck('tahun')->unique() as $tahun)
                                <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>
                                    {{ $tahun }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-2" style="padding-left: 5px; padding-right: 5px;">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Cari Nama"
                            value="{{ request('search') }}">
                    </div>
                    <div class="col-md-2 mb-2" style="padding-left: 5px; color: #fff; border-radius: 20px; border: none;">
                        <button type="submit" class="btn btn-primary mb-1">
                            <i class="fas fa-search"></i> Cari</button>
                    </div>
                </div>
            </form>


            <div style="margin-top: 3%;" class="table-responsive">
                @foreach ($prestasi->groupBy('tahun') as $tahun => $prestasis)
                    <h3>{{ $tahun }}</h3>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Juara</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prestasis as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration + ($prestasi->currentPage() - 1) * $prestasi->perPage() }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->juara }}</td>
                                    <td>{!! $item->nama_prestasi !!}</td>
                                    <td>{{ $item->tingkat }}</td>
                                    <td>
                                        <a href="{{ route('admin.prestasi.edit', $item->id) }}"
                                            class="btn btn-primary btn-sm edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#deleteModal{{ $item->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Konfirmasi
                                                    Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <form action="{{ route('admin.prestasi.destroy', $item->id) }}"
                                                    method="POST">
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
                @endforeach
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $prestasi->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $prestasi->previousPageUrl() }}">Previous</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Page {{ $prestasi->currentPage() }} of
                        {{ $prestasi->lastPage() }}</a>
                </li>
                <li class="page-item {{ $prestasi->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $prestasi->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
