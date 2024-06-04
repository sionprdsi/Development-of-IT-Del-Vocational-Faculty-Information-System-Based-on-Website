@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Halaman Tambah Berita Fakultas Vokasi') }}
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/berita" style="text-decoration: none; color: #4C74DC;">Berita
                            Vokasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Halaman Tambah Berita
                        Fakultas Vokasi</li>
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
                padding: 1rem 1.5rem;
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
            }

            .btn-warning,
            .btn-danger {
                color: white;
            }

            .btn-primary:focus,
            .btn-primary.focus {
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }

            .title-label {
                font-size: 18px;
                font-weight: bold;
                color: black;
                text-transform: uppercase;
                margin-bottom: 10px;
                display: block;
            }

            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-control {
                padding: 0.75rem 1rem;
                border-radius: 8px;
            }

            .form-control-file {
                display: block;
                margin-top: 0.5rem;
            }

            .btn-primary {
                background-color: #4C74DC;
                border: none;
                padding: 0.75rem 1.5rem;
                border-radius: 8px;
                transition: background-color 0.3s;
            }

            .btn-primary:hover {
                background-color: #3b5bb5;
            }

            .btn-block {
                width: 100%;
                margin-top: 1rem;
            }
        </style>

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Berita</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul" class="title-label">Judul<span class="small text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" placeholder="Masukkan judul berita"
                            class="form-control tinymce" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="foto" class="title-label" style="font-weight: bold; margin-bottom: 5px; display: inline-block;">
                            Foto<span class="small text-danger" style="color: red; font-size: 80%;">*</span>
                        </label>
                        <input type="file" name="foto" id="foto" accept="image/*" class="form-control-file tinymce" required style="border: 1px solid #ccc; border-radius: 4px; padding: 6px 12px;">
                    </div>
                    <div class="form-group">
                        <label for="konten" class="title-label">Konten<span class="small text-danger">*</span></label>
                        <textarea class="form-control tinymce" name="konten" id="konten" rows="5"
                            placeholder="Masukkan detail berita"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="title-label">Tanggal Posting<span class="small text-danger">*</span></label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/tinymce@5/tinymce.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                tinymce.init({
                    selector: '#konten',
                    plugins: [
                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                        'insertdatetime media nonbreaking save table directionality',
                        'emoticons template paste textpattern help'
                    ],
                    toolbar: 'undo redo | formatselect | bold italic backcolor | \
                                                          alignleft aligncenter alignright alignjustify | \
                                                          bullist numlist outdent indent | removeformat | help',
                    toolbar_mode: 'floating',
                    height: 300,
                    menubar: 'file edit view insert format tools table help',
                    branding: false,
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                    setup: function(editor) {
                        editor.on('init', function() {
                            this.getDoc().body.style.fontSize = '14px';
                        });
                    },
                    style_formats: [{
                            title: 'Bold text',
                            inline: 'b'
                        },
                        {
                            title: 'Red text',
                            inline: 'span',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Red header',
                            block: 'h1',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Example 1',
                            inline: 'span',
                            classes: 'example1'
                        },
                        {
                            title: 'Example 2',
                            inline: 'span',
                            classes: 'example2'
                        },
                        {
                            title: 'Table styles'
                        },
                        {
                            title: 'Table row 1',
                            selector: 'tr',
                            classes: 'tablerow1'
                        }
                    ],
                    content_css: [
                        '//www.tiny.cloud/css/codepen.min.css'
                    ]
                });
            });
        </script>


    @endsection
