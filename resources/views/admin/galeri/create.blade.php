@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Halaman Tambah Galeri Gambar Fakultas Vokasi') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/galeri"
                            style="text-decoration: none; color: #4C74DC;">Galeri</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Halaman Tambah Galeri
                        Gambar Fakultas Vokasi</li>
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
            .title-label {
                font-size: 16px;
                font-weight: bold;
                color: black;
                text-transform: uppercase;
                margin-bottom: 10px;
                margin-top: 17px;
                display: block;
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

        @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Upload Foto</h5>
            </div>
            <div class="card-body">
                <form id="uploadForm" action="{{ route('admin.galeri.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="title-label" for="files">Foto<span class="small text-danger">*</span></label>
                        <input type="file" name="files[]" id="files" accept="image/*" multiple class="form-control"
                            required>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                        data-target="#confirmModal">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Simpan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menyimpan foto-foto ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="confirmSaveButton">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('confirmSaveButton').addEventListener('click', function() {
            document.getElementById('uploadForm').submit();
        });
    </script>
@endsection
