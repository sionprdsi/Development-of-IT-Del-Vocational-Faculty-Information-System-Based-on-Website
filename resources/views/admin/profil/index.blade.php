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
            {{ __('Halaman Beranda Kampus') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Profil Kampus</li>
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
            <form method="POST" action="{{ route('admin.profil.update') }}" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="data-kampus-tab" data-toggle="tab" href="#data-kampus" role="tab"
                            aria-controls="data-kampus" aria-selected="true">Data Kampus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="maps-tab" data-toggle="tab" href="#maps" role="tab"
                            aria-controls="maps" aria-selected="false">Google Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab"
                            aria-controls="logo" aria-selected="false">Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab"
                            aria-controls="video" aria-selected="false">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="social-media-tab" data-toggle="tab" href="#social-media" role="tab"
                            aria-controls="social-media" aria-selected="false">Social Media</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                    <!-- Data Kampus Tab -->
                    <div class="tab-pane fade show active" id="data-kampus" role="tabpanel"
                        aria-labelledby="data-kampus-tab">
                        <!-- Nama Kampus -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="nama"
                                        style="font-weight: bold;">Nama Kampus<span
                                            class="small text-danger">*</span></label>
                                    <!-- Gunakan textarea dengan ID yang sesuai -->
                                    <textarea id="nama" class="form-control tinymce" name="nama" placeholder="Nama Kampus">{{ $profil->nama ?? '' }}</textarea>
                                    <div id="namaError" class="text-danger" style="font-size: 12px;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Kenapa Memilih Vokasi -->
                        <div class="card shadow mb-4">
                            <!-- Kenapa Memilih Vokasi -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="form-group focused">
                                        <label class="title-label" class="form-control-label" for="kenapa_vokasi">Kenapa
                                            Memilih Vokasi?<span class="small text-danger">*</span></label>
                                        <textarea id="kenapa_vokasi" class="form-control tinymce" name="kenapa_vokasi" placeholder="Kenapa Memilih Vokasi">{{ $profil->kenapa_vokasi ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="alamat">Alamat<span
                                            class="small text-danger">*</span></label>
                                    <textarea id="alamat" class="form-control tinymce" name="alamat" placeholder="Alamat Kampus">{{ $profil->alamat ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Kode Pos -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="kode_pos">Kode Pos<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="kode_pos" class="form-control" name="kode_pos"
                                        placeholder="Kode Pos" value="{{ $profil->kode_pos ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="telepon">Telepon<span
                                            class="small text-danger">*</span></label>
                                    <input type="number" id="telepon" class="form-control" name="telepon"
                                        placeholder="Telepon" value="{{ $profil->telepon ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="email">Email<span
                                            class="small text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Email" value="{{ $profil->email ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Email Karir -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="karir">Email Karir<span
                                            class="small text-danger">*</span></label>
                                    <input type="email" id="karir" class="form-control" name="karir"
                                        placeholder="Email Karir" value="{{ $profil->karir ?? '' }}">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Logo Tab -->
                    <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                        <!-- Logo -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="logo">Logo<span
                                            class="small text-danger">*</span></label>
                                    <input type="file" id="logo" class="form-control" name="logo">
                                    @if (isset($profil->logo))
                                        <img src="{{ Storage::url($profil->logo) }}" alt="Logo" width="150"
                                            class="mt-2">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Tab -->
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                        <!-- Video Content -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="form-control-label title-label" for="video">Video<span
                                            class="small text-danger">*</span></label>
                                    <input type="file" id="video" class="form-control" name="video">
                                    @if (isset($profil->video))
                                        <video controls class="mt-2">
                                            <source src="{{ Storage::url($profil->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Maps Tab -->
                    <div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab">
                        <!-- Link Embeded Google Maps -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="peta">Link Embeded
                                        Google Maps<span class="small text-danger">*</span></label>
                                    <textarea id="peta" class="form-control" name="peta" placeholder="Link Embeded Google Maps"
                                        style="height: 150px;">{{ $profil->peta ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Social Media Tab -->
                    <div class="tab-pane fade" id="social-media" role="tabpanel" aria-labelledby="social-media-tab">
                        <!-- Social Media Content -->
                        <!-- Facebook -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="facebook">Facebook<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="facebook" class="form-control" name="facebook"
                                        placeholder="Facebook" value="{{ $profil->facebook ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Twitter -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="twitter">Twitter<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="twitter" class="form-control" name="twitter"
                                        placeholder="Twitter" value="{{ $profil->twitter ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Youtube -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" class="form-control-label" for="youtube">Youtube<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="youtube" class="form-control" name="youtube"
                                        placeholder="Youtube" value="{{ $profil->youtube ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Instagram -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-group focused">
                                    <label class="title-label" for="instagram">Instagram<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="instagram" class="form-control" name="instagram"
                                        placeholder="Instagram" value="{{ $profil->instagram ?? '' }}">
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
                <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                    aria-hidden="true">
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
