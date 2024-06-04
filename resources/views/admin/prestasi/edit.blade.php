@extends('layouts.admin')

@section('main-content')

    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Halaman Edit Prestasi Mahasiswa') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/prestasi"
                            style="text-decoration: none; color: #4C74DC;">Prestasi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Edit Prestasi Mahasiswa
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
        </style>

        <div class="card border-0 rounded-3 shadow">
            <div class="card-body">
                <form id="updatePrestasiForm" action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="title-label" for="nama" class="form-label">Nama<span
                                class="small text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" value="{{ $prestasi->nama }}"
                            class="form-control" placeholder="Masukkan nama prestasi">
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="juara" class="form-label">Juara<span
                                class="small text-danger">*</span></label>
                        <input type="text" name="juara" id="juara" value="{{ $prestasi->juara }}"
                            class="form-control" placeholder="Masukkan juara prestasi">
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="nama_prestasi" class="form-label">Nama Prestasi<span
                                class="small text-danger">*</span></label>
                        <input type="text" name="nama_prestasi" id="nama_prestasi" value="{{ $prestasi->nama_prestasi }}"
                            class="form-control tinymce" placeholder="Masukkan nama prestasi">
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="tingkat" class="form-label">Tingkat<span
                                class="small text-danger">*</span></label>
                        <input type="text" name="tingkat" id="tingkat" value="{{ $prestasi->tingkat }}"
                            class="form-control" placeholder="Masukkan tingkat prestasi">
                    </div>

                    <div class="mb-3">
                        <label class="title-label" for="tahun" class="form-label">Tahun<span
                                class="small text-danger">*</span></label>
                        <input type="text" name="tahun" id="tahun" value="{{ $prestasi->tahun }}"
                            class="form-control" placeholder="Masukkan tahun prestasi">
                    </div>

                    <!-- Tombol untuk Memicu Modal -->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                        data-target="#confirmModal">Perbarui</button>
                </form>
            </div>
        </div>

        <!-- Modal HTML -->
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Perbarui Prestasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin memperbarui prestasi ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="confirmUpdateButton">Ya, Perbarui</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript untuk Modal Konfirmasi -->
    <script>
        document.getElementById('confirmUpdateButton').addEventListener('click', function() {
            document.getElementById('updatePrestasiForm').submit();
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
