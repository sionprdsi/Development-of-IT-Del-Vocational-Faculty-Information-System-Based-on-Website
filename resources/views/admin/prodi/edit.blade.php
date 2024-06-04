@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Edit Program Studi') }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/prodi" style="text-decoration: none; color: #4C74DC;">Edit Program Studi</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">{{ $prodi->nama }}</li>
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
                <form action="{{ route('admin.prodi.update', $prodi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="title-label" class="nav-item">
                            <a class="nav-link active" id="nama-tab" data-toggle="tab" href="#nama" role="tab"
                                aria-controls="nama" aria-selected="true">Nama Program Studi</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="judul-tab" data-toggle="tab" href="#judul" role="tab"
                                aria-controls="judul" aria-selected="false">Judul</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="subjudul-tab" data-toggle="tab" href="#subjudul" role="tab"
                                aria-controls="subjudul" aria-selected="false">Subjudul</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="foto-tab" data-toggle="tab" href="#foto" role="tab"
                                aria-controls="foto" aria-selected="false">Foto</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="sejarah-tab" data-toggle="tab" href="#sejarah" role="tab"
                                aria-controls="sejarah" aria-selected="false">Sejarah</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="visi-tab" data-toggle="tab" href="#visi" role="tab"
                                aria-controls="visi" aria-selected="false">Visi</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="misi-tab" data-toggle="tab" href="#misi" role="tab"
                                aria-controls="misi" aria-selected="false">Misi</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="tujuan-tab" data-toggle="tab" href="#tujuan" role="tab"
                                aria-controls="tujuan" aria-selected="false">Tujuan</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="lulusan-tab" data-toggle="tab" href="#lulusan" role="tab"
                                aria-controls="lulusan" aria-selected="false">Lulusan</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="kurikulum-tab" data-toggle="tab" href="#kurikulum" role="tab"
                                aria-controls="kurikulum" aria-selected="false">Kurikulum</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="teks_dosen-tab" data-toggle="tab" href="#teks_dosen" role="tab"
                                aria-controls="teks_dosen" aria-selected="false">Teks Dosen</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="nama" role="tabpanel" aria-labelledby="nama-tab">
                            <div class="form-group">
                                <label class="title-label" for="nama">Nama Program Studi<span class="small text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" value="{{ $prodi->nama }}"
                                    placeholder="Masukkan nama program studi" class="form-control" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="judul" role="tabpanel" aria-labelledby="judul-tab">
                            <div class="form-group">
                                <label class="title-label" for="judul">Judul<span class="small text-danger">*</span></label>
                                <input type="text" name="judul" id="judul" value="{{ $prodi->judul }}"
                                    placeholder="Masukkan judul program studi" class="form-control" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="subjudul" role="tabpanel" aria-labelledby="subjudul-tab">
                            <div class="form-group">
                                <label class="title-label" for="subjudul">Subjudul<span class="small text-danger">*</span></label>
                                <input type="text" name="subjudul" id="subjudul" value="{{ $prodi->subjudul }}"
                                    placeholder="Masukkan subjudul program studi" class="form-control">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="foto" role="tabpanel" aria-labelledby="foto-tab">
                            <div class="form-group">
                                <label class="title-label" for="foto">Foto<span class="small text-danger">*</span></label>
                                <input type="file" name="foto" id="foto" accept="image/*" placeholder="Upload foto" class="form-control">
                                @if ($prodi->foto)
                                    <img src="{{ Storage::url('prodi/' . $prodi->foto) }}" alt="Foto Program Studi" width="100">
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sejarah" role="tabpanel" aria-labelledby="sejarah-tab">
                            <div class="form-group">
                                <label class="title-label" for="sejarah">Sejarah<span class="small text-danger">*</span></label>
                                <textarea name="sejarah" id="sejarah" rows="5" placeholder="Masukkan sejarah program studi"
                                    class="form-control tinymce">{{ $prodi->sejarah }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                            <div class="form-group">
                                <label class="title-label" for="visi">Visi<span class="small text-danger">*</span></label>
                                <textarea name="visi" id="visi" rows="3" placeholder="Masukkan visi program studi"
                                    class="form-control tinymce">{{ $prodi->visi }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab">
                            <div class="form-group">
                                <label class="title-label" for="misi">Misi<span class="small text-danger">*</span></label>
                                <textarea name="misi" id="misi" rows="3" placeholder="Masukkan misi program studi"
                                    class="form-control tinymce">{{ $prodi->misi }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">
                            <div class="form-group">
                                <label class="title-label" for="tujuan">Tujuan<span class="small text-danger">*</span></label>
                                <textarea name="tujuan" id="tujuan" rows="3" placeholder="Masukkan Tujuan Pendidikan Program Studi"
                                    class="form-control tinymce">{{ $prodi->tujuan }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lulusan" role="tabpanel" aria-labelledby="lulusan-tab">
                            <div class="form-group">
                                <label class="title-label" for="lulusan">Lulusan<span class="small text-danger">*</span></label>
                                <textarea name="lulusan" id="lulusan" rows="3" placeholder="Masukkan informasi tentang lulusan program studi"
                                    class="form-control tinymce">{{ $prodi->lulusan }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kurikulum" role="tabpanel" aria-labelledby="kurikulum-tab">
                            <div class="form-group">
                                <label class="title-label" for="kurikulum">Kurikulum<span class="small text-danger">*</span></label>
                                <textarea name="kurikulum" id="kurikulum" rows="3" placeholder="Masukkan informasi tentang kurikulum program studi"
                                    class="form-control tinymce">{{ $prodi->kurikulum }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teks_dosen" role="tabpanel" aria-labelledby="teks_dosen-tab">
                            <div class="form-group">
                                <label class="title-label" for="teks_dosen">Teks Dosen<span class="small text-danger">*</span></label>
                                <textarea name="teks_dosen" id="teks_dosen" rows="3" placeholder="Masukkan informasi tentang dosen program studi"
                                    class="form-control tinymce">{{ $prodi->teks_dosen }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Perbarui
                    </button>
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
