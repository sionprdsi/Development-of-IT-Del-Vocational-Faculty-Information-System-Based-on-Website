@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Kurikulum Program Studi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Semester</li>
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

    <!-- Filter Program Studi -->
    <div class="mb-4">
        <form method="GET" action="{{ route('admin.semester') }}">
            <div class="form-group row">
                <label for="prodi_id" class="col-md-2 col-form-label text-md-right">{{ __('Filter by Prodi') }}</label>
                <div class="col-md-4">
                    <select id="prodi_id" class="form-control" name="prodi_id" onchange="this.form.submit()">
                        <option value="">{{ __('All') }}</option>
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->id }}" {{ $selectedProdiId == $prodi->id ? 'selected' : '' }}>
                                {{ $prodi->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Semester</h5>
            <a href="{{ route('admin.semester.create') }}" class="btn btn-sm btn-light shadow">
                <i class="fas fa-plus fa-sm text-primary"></i> Tambah Semester
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @php
                    $currentSemester = '';
                    $rowNumber = 1;
                @endphp
                @foreach ($semesters as $semester)
                    @if ($currentSemester != $semester->note)
                        @if ($currentSemester != '')
                            </tbody>
                            </table>
                        @endif
                        @php
                            $currentSemester = $semester->note;
                            $rowNumber = 1; // Reset row number for new semester
                        @endphp
                        <h4 class="mt-4">{{ $currentSemester }}</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Prodi</th>
                                    <th>Semester</th>
                                    <th>Kode</th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                    @endif
                    <tr>
                        <td>{{ $rowNumber }}</td>
                        <td>{{ $semester->prodi->nama }}</td>
                        <td>{{ $semester->note }}</td>
                        <td>{{ $semester->kode }}</td>
                        <td>{{ $semester->matkul }}</td>
                        <td>{{ $semester->sks }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm edit-btn"
                                href="{{ route('admin.semester.edit', $semester->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#deleteModal{{ $semester->id }}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $semester->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel{{ $semester->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $semester->id }}">Konfirmasi
                                        Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('admin.semester.destroy', $semester->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $rowNumber++; // Increment row number within the same semester
                    @endphp
                @endforeach
                </tbody>
                </table>
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $semesters->appends(request()->query())->links('vendor.pagination.simple') }}
            </div>
        </div>
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
            margin: 0 0.25rem;
        }

        .btn-warning,
        .btn-danger {
            color: white;
        }
    </style>
@endsection
