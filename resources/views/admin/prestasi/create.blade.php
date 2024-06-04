@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
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
                {{ __('Tambah Prestasi Mahasiswa') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/prestasi"
                            style="text-decoration: none; color: #4C74DC;">Prestasi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Tambah Prestasi Mahasiswa
                    </li>
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

        <style>
            .title-label {
                font-size: 18px;
                font-weight: bold;
                color: black;
                text-transform: uppercase;
                margin-bottom: 10px;
                display: block;
            }

            .card {
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .card-title {
                color: #333;
                font-weight: bold;
                text-transform: uppercase;
            }

            .form-label {
                color: #777;
            }
        </style>

        <div class="card border-0 rounded-3 shadow">
            <div class="card-body">
                <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="title-label" for="nama" class="form-label">Nama Mahasiswa<span class="small text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama mahasiswa"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="title-label"  for="nama_prestasi" class="form-label">Nama Prestasi<span class="small text-danger">*</span></label>
                        <input type="text" name="nama_prestasi" id="nama_prestasi" placeholder="Masukkan nama prestasi"
                            class="form-control tinymce">
                    </div>

                    <div class="mb-3">
                        <label class="title-label"  for="juara" class="form-label">Prestasi yang Dicapai<span class="small text-danger">*</span></label>
                        <input type="text" name="juara" id="juara" placeholder="Masukkan prestasi yang dicapai"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="tingkat" class="form-label">Tingkat Prestasi Wilayah<span class="small text-danger">*</span></label>
                        <input type="text" name="tingkat" id="tingkat" placeholder="Masukkan tingkat prestasi"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="tahun" class="form-label">Tahun Prestasi diraih<span class="small text-danger">*</span></label>
                        <input type="text" name="tahun" id="tahun" placeholder="Masukkan tahun prestasi"
                            class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
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
                height: 200,
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
