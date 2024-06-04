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
            {{ __('Halaman Kata Sambutan Dekan Vokasi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Kata Sambutan</li>
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
            <div class="card shadow mb-4" style="border-radius: 12px; overflow: hidden; padding: 20px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.sambutan_dekan.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="pl-lg-4" style="padding-left: 20px;">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="title-label" for="judul"
                                            style="font-weight: bold; display: block; margin-bottom: 10px;">
                                            Judul <span class="small text-danger">*</span>
                                        </label>
                                        <input type="text" name="judul" class="form-control"
                                            value="{{ $sambutan_dekan->judul ?? '' }}" required
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="title-label" for="nama"
                                            style="font-weight: bold; display: block; margin-bottom: 10px;">
                                            Nama <span class="small text-danger">*</span>
                                        </label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $sambutan_dekan->nama ?? '' }}"
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="title-label" for="jabatan"
                                            style="font-weight: bold; display: block; margin-bottom: 10px;">
                                            Jabatan <span class="small text-danger">*</span>
                                        </label>
                                        <input type="text" name="jabatan" class="form-control"
                                            value="{{ $sambutan_dekan->jabatan ?? '' }}"
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="title-label" for="tanggal"
                                            style="font-weight: bold; display: block; margin-bottom: 10px;">
                                            Tanggal Diperbaharui <span class="small text-danger">*</span>
                                        </label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control"
                                            value="{{ $sambutan_dekan->updated_at->format('Y-m-d') }}" readonly
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="title-label" for="teks_kata_sambutan"
                                            style="font-weight: bold; display: block; margin-bottom: 10px;">
                                            Teks Kata Sambutan <span class="small text-danger">*</span>
                                        </label>
                                        <textarea name="teks_kata_sambutan" class="form-control tinymce" rows="5"
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">{{ $sambutan_dekan->teks_kata_sambutan ?? '' }}</textarea>
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
                                            <input type="file" name="foto" class="form-control"
                                                style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                            @if (isset($sambutan_dekan->foto))
                                                <img src="{{ Storage::url($sambutan_dekan->foto) }}" alt="Foto Dekan"
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
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('form').addEventListener('submit', function() {
                var updated_at = '{{ $sambutan_dekan->updated_at->format('Y-m-d') }}';
                document.getElementById('tanggal').value = updated_at;
            });
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
