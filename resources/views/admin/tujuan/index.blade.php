@extends('layouts.admin')

@section('main-content')
    <style>
        .title-label {
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }
    </style>

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Tujuan Fakultas Vokasi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Tujuan</li>
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

    <div class="row">
        <div class="col-lg-12 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.tujuan.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="title-label" class="form-control-label" for="landasan">Landasan<span
                                                class="small text-danger">*</span></label>
                                        <textarea id="landasan" class="form-control tinymce" name="landasan" placeholder="Landasan">{{ old('landasan', $tujuan->landasan ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="title-label" class="form-control-label" for="sasaran">Sasaran<span
                                                class="small text-danger">*</span></label>
                                        <textarea id="sasaran" class="form-control tinymce" name="sasaran" placeholder="Sasaran">{{ old('sasaran', $tujuan->sasaran ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="card shadow-sm"
                                        style="border-radius: 12px; overflow: hidden; padding: 20px; border: 1px solid #ddd;">
                                        <div class="form-group">
                                            <label class="title-label" for="foto"
                                                style="font-weight: bold; color: #333; display: block; margin-bottom: 10px;">
                                                Foto <span class="small text-danger">*</span>
                                            </label>
                                            <input type="file" name="tujuan_foto" class="form-control"
                                                style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                            @if (isset($tujuan->tujuan_foto))
                                                <img src="{{ Storage::url($tujuan->tujuan_foto) }}" alt="Foto Dekan"
                                                    width="150" class="mt-2"
                                                    style="display: block; margin-top: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#confirmationModal">
                            Perbarui
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="confirmationModal" tabindex="-1"
                            aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Perbarui</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin melakukan perbarui?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include TinyMCE -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@5/tinymce.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Inisialisasi TinyMCE untuk semua elemen dengan kelas tinymce
            tinymce.init({
                selector: '.tinymce',
                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                height: 250,
                menubar: false,
                branding: false,
            });
        });
    </script>
@endsection
