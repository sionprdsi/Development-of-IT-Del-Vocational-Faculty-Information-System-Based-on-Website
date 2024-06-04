@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="page-header mb-4">
                <h1 class="h2 text-primary font-weight-bold mb-3"
                    style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                    {{ __('Halaman Tambah Alumni Fakultas Vokasi') }}
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                        <li class="breadcrumb-item"><a href="/admin/home"
                                style="text-decoration: none; color: #4C74DC;">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/event"
                                style="text-decoration: none; color: #4C74DC;">Alumni</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Halaman Tambah Agenda
                            Fakultas Vokasi</li>
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
                <div class="card-body">
                    <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="title-label" for="name">Nama Alumni<span
                                    class="small text-danger">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Masukkan nama alumni"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="title-label" for="image">Foto<span class="small text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="title-label" for="work_at">Bekerja di<span
                                    class="small text-danger">*</span></label>
                            <textarea name="work_at" id="work_at" rows="5" placeholder="Masukkan tempat kerja alumni" class="form-control"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="title-label" for="graduation_year">Tahun Lulusan<span
                                    class="small text-danger">*</span></label>
                            <input type="number" name="graduation_year" id="graduation_year"
                                placeholder="Masukkan tahun lulusan alumni" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="title-label" for="testimonial">Deskripsi Testimoni<span
                                    class="small text-danger">*</span></label>
                            <textarea name="testimonial" id="testimonial" rows="5" placeholder="Masukkan deskripsi testimoni alumni"
                                class="form-control" required></textarea>
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
                    height: 250,
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
