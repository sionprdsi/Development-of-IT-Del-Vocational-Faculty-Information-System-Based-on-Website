@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Halaman Edit Profil Dosen Fakultas Vokasi') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/dosen" style="text-decoration: none; color: #4C74DC;">Profil
                            Dosen</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Edit Profil Dosen </li>
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
                font-size: 16px;
                font-weight: bold;
                color: black;
                text-transform: uppercase;
                margin-bottom: 10px;
                margin-top: 17px;
                display: block;
            }
        </style>

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Alumni<span class="small text-danger">*</span></label>
                        <input type="text" name="name" id="name" value="{{ $alumni->name }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="image">Foto<span class="small text-danger">*</span></label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ($alumni->image)
                            <img src="{{ Storage::url($alumni->image) }}" alt="Foto"
                                style="width: 100px; height: auto;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="work_at">Bekerja di<span class="small text-danger">*</span></label>
                        <textarea name="work_at" id="work_at" rows="5" class="form-control" required>{{ $alumni->work_at }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="graduation_year">Tahun Lulusan<span class="small text-danger">*</span></label>
                        <input type="number" name="graduation_year" id="graduation_year"
                            value="{{ $alumni->graduation_year }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="testimonial">Testimoni<span class="small text-danger">*</span></label>
                        <textarea name="testimonial" id="testimonial" rows="5" class="form-control" required>{{ $alumni->testimonial }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                </form>
            </div>
        </div>

        <script>
            function toggleOtherInput(select) {
                var otherInput = document.getElementById('jabatan_lainnya');
                if (select.value === 'Lainnya') {
                    otherInput.style.display = 'block';
                } else {
                    otherInput.style.display = 'none';
                    otherInput.value = ''; // Clear the input value when not 'Lainnya'
                }
            }

            // Call the function on page load to set the correct initial state
            document.addEventListener('DOMContentLoaded', function() {
                var jabatanSelect = document.getElementById('jabatan');
                toggleOtherInput(jabatanSelect);
            });
        </script>

        <script>
            document.getElementById('confirmDeleteButton').addEventListener('click', function() {
                document.getElementById('hapus_gambar').checked = true;
                document.querySelector('.position-relative').style.display = 'none';
                $('#confirmDeleteModal').modal('hide');
            });
        </script>

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
                    height: 400,
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
