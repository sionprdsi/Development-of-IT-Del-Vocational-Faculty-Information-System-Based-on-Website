@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Tambah Gambar Slider') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/slider"
                            style="text-decoration: none; color: #4C74DC;">Slider</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Tambah Gambar</li>
                </ol>
            </nav>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow rounded">
            <div class="card-body">
                <form id="uploadForm" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="files" class="form-label font-weight-bold">Foto</label>
                        <input type="file" name="files[]" id="files" accept="image/*" multiple class="form-control-file"
                            style="border-radius: 5px;">
                        @error('files')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#saveModal"
                        style="border-radius: 5px;">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Save Modal -->
        <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="saveModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="saveModalLabel">Konfirmasi Simpan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="confirmForm" action="{{ route('admin.slider.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            Apakah Anda yakin ingin menyimpan data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" form="uploadForm" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tambahkan script validasi sebelum menampilkan modal -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('uploadForm').addEventListener('submit', function(event) {
                    const fileInput = document.getElementById('files');
                    if (!fileInput || !fileInput.files || fileInput.files.length === 0) {
                        event.preventDefault(); // Menghentikan pengiriman form jika tidak ada file yang dipilih
                        alert('Mohon pilih file gambar terlebih dahulu.');
                    }
                });
            });
        </script>


    </div>


@endsection
