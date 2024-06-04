@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="page-header mb-4">
                <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                    {{ __('Halaman Tambah Agenda Fakultas Vokasi') }}
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                        <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/event"
                                style="text-decoration: none; color: #4C74DC;">Agenda</a></li>
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
                <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="title-label" for="nama">Nama Agenda<span class="small text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama event"
                            class="form-control tinymce" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="detail">Detail Tempat Agenda<span class="small text-danger">*</span></label>
                        <textarea name="detail" id="detail" rows="5" placeholder="Masukkan detail event" class="form-control tinymce"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="tanggal">Tanggal Agenda<span class="small text-danger">*</span></label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="keterangan">Keterangan Waktu (JAM)<span class="small text-danger">*</span></label>
                        <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan keterangan tambahan"
                            class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
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
