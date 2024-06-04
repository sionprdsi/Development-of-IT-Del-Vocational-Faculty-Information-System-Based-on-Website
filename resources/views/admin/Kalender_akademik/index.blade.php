@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Kalender Akademik') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Kalender</li>
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

    <!-- Modern Card Layout for Academic Calendar -->
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Kalender Akademik</h5>
            <!-- Add any additional buttons or actions here if needed -->
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.kalender_akademik.update') }}" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul -->
                <div class="form-group">
                    <label class="title-label" for="judul">Judul<span class="small text-danger">*</span></label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        value="{{ $kalender_akademik->judul ?? '' }}" required>
                </div>

                <!-- Konten -->
                <div class="form-group">
                    <label class="title-label" for="konten">Konten<span class="small text-danger">*</span></label>
                    <textarea class="form-control tinymce" id="konten" name="konten" rows="3">{{ $kalender_akademik->konten ?? '' }}</textarea>
                </div>

                <!-- Tanggal -->
                <div class="form-group">
                    <label class="title-label" for="tanggal">Tanggal<span class="small text-danger">*</span></label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="{{ $kalender_akademik->tanggal ?? '' }}" required>
                </div>

                <!-- Keterangan -->
                <div class="form-group">
                    <label class="title-label" for="keterangan">Keterangan<span class="small text-danger">*</span></label>
                    <textarea class="form-control tinymce" id="keterangan" name="keterangan" rows="3">{{ $kalender_akademik->keterangan ?? '' }}</textarea>
                </div>

                <!-- Foto -->
                <div class="form-group">
                    <label for="foto" class="title-label">Foto<span class="small text-danger">*</span></label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                    @if (!empty($kalender_akademik->foto))
                        <img src="{{ Storage::url($kalender_akademik->foto) }}" alt="Foto kalender" width="150"
                            class="mt-2">
                    @endif
                </div>

                <!-- File PDF -->
                <div class="form-group">
                    <label class="title-label" for="file_pdf">File PDF<span class="small text-danger">*</span></label>
                    <input type="file" class="form-control-file" id="file_pdf" name="file_pdf">
                    @if (!empty($kalender_akademik->file_pdf))
                        <a href="{{ Storage::url($kalender_akademik->file_pdf) }}"
                            target="_blank">{{ basename($kalender_akademik->file_pdf) }}</a>
                    @endif
                </div>

                <!-- Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include TinyMCE -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@5/tinymce.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                selector: '.tinymce',
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
                height: 150,
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
