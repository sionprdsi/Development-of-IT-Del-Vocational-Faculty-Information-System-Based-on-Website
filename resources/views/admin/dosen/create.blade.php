@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Tambah Profil Dosen') }}
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/admin/dosen" style="text-decoration: none; color: #4C74DC;">Profil
                            Dosen</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Tambah Profil Dosen</li>
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
                <form id="dosenForm" action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Tab navigation -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="title-label" class="nav-item">
                            <a class="nav-link active" id="informasi-dasar-tab" data-toggle="tab" href="#informasi-dasar"
                                role="tab" aria-controls="informasi-dasar" aria-selected="true">Informasi Dasar</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab"
                                aria-controls="tentang" aria-selected="false">Tentang</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab"
                                aria-controls="pendidikan" aria-selected="false">Pendidikan</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="prestasi-tab" data-toggle="tab" href="#prestasi" role="tab"
                                aria-controls="prestasi" aria-selected="false">Prestasi</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="publikasi-tab" data-toggle="tab" href="#publikasi" role="tab"
                                aria-controls="publikasi" aria-selected="false">Publikasi</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="pengalaman_kerja-tab" data-toggle="tab" href="#pengalaman_kerja"
                                role="tab" aria-controls="pengalaman_kerja" aria-selected="false">Pengalaman Kerja</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="keahlian-tab" data-toggle="tab" href="#keahlian" role="tab"
                                aria-controls="keahlian" aria-selected="false">Keahlian</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="pengabdian_masyarakat-tab" data-toggle="tab"
                                href="#pengabdian_masyarakat" role="tab" aria-controls="pengabdian_masyarakat"
                                aria-selected="false">Pengabdian Kepada Masyarakat</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Tab Informasi Dasar -->
                        <div class="tab-pane fade show active" id="informasi-dasar" role="tabpanel"
                            aria-labelledby="informasi-dasar-tab">
                            <div class="form-group">
                                <label class="title-label" for="nama">Nama Dosen<span
                                        class="small text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan nama dosen"
                                    class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="title-label" for="nidn">NIDN<span
                                        class="small text-danger">*</span></label>
                                <input type="text" name="nidn" id="nidn" placeholder="Masukkan NIDN dosen"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="title-label" for="jabatan">Jabatan<span
                                        class="small text-danger">*</span></label>
                                <select name="jabatan" id="jabatan" class="form-control" required
                                    onchange="toggleOtherInput(this)">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Dekan Fakultas Vokasi">Dekan Fakultas Vokasi</option>
                                    <option value="Dosen Fakultas Vokasi">Dosen Fakultas Vokasi</option>
                                    <option value="Rektor Institut Teknologi Del">Rektor Institut Teknologi Del</option>
                                    <option value="Staf Fakultas Vokasi">Staf Fakultas Vokasi</option>
                                    <option value="Kepala Program Studi Teknologi Rekayasa Perangkat Lunak">Kepala Program
                                        Studi Teknologi Rekayasa Perangkat Lunak</option>
                                    <option value="Kepala Program Studi Teknologi Informasi">Kepala Program Studi Teknologi
                                        Informasi</option>
                                    <option value="Kepala Program Studi Teknologi Komputer">Kepala Program Studi Teknologi
                                        Komputer</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <input type="text" name="jabatan_lainnya" id="jabatan_lainnya"
                                    placeholder="Masukkan jabatan lainnya" class="form-control mt-2"
                                    style="display: none;">
                            </div>

                            <div class="title-label" class="form-group">
                                <label for="gambar">Foto<span class="small text-danger">*</span></label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                        </div>

                        <!-- Tab Tentang -->
                        <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                            <div class="form-group">
                                <label class="title-label" for="tentang">Tentang</label>
                                <textarea name="tentang" id="tentang" placeholder="Masukkan tentang dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Pendidikan -->
                        <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <div class="form-group">
                                <label class="title-label" for="pendidikan">Pendidikan</label>
                                <textarea name="pendidikan" id="pendidikan" placeholder="Masukkan pendidikan dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Prestasi -->
                        <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                            <div class="form-group">
                                <label class="title-label" for="prestasi">Prestasi</label>
                                <textarea name="prestasi" id="prestasi" placeholder="Masukkan prestasi dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Publikasi -->
                        <div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
                            <div class="form-group">
                                <label class="title-label" for="publikasi">Publikasi</label>
                                <textarea name="publikasi" id="publikasi" placeholder="Masukkan publikasi dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Pengalaman Kerja -->
                        <div class="tab-pane fade" id="pengalaman_kerja" role="tabpanel"
                            aria-labelledby="pengalaman_kerja-tab">
                            <div class="form-group">
                                <label class="title-label" for="pengalaman_kerja">Pengalaman Kerja</label>
                                <textarea name="pengalaman_kerja" id="pengalaman_kerja" placeholder="Masukkan pengalaman kerja dosen"
                                    class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Keahlian -->
                        <div class="tab-pane fade" id="keahlian" role="tabpanel" aria-labelledby="keahlian-tab">
                            <div class="form-group">
                                <label class="title-label" for="keahlian">Keahlian</label>
                                <textarea name="keahlian" id="keahlian" placeholder="Masukkan keahlian dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                        <!-- Tab Pengabdian Kepada Masyarakat -->
                        <div class="tab-pane fade" id="pengabdian_masyarakat" role="tabpanel"
                            aria-labelledby="pengabdian_masyarakat-tab">
                            <div class="form-group">
                                <label class="title-label" for="pengabdian_masyarakat">Pengabdian Kepada
                                    Masyarakat</label>
                                <textarea name="pengabdian_masyarakat" id="pengabdian_masyarakat"
                                    placeholder="Masukkan pengalaman pengabdian kepada masyarakat dosen" class="form-control tinymce"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prodi_id">Program Studi</label>
                        <select name="prodi_id" id="prodi_id" class="form-control" required>
                            @foreach ($prodi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
        <script>
            function toggleOtherInput(selectElement) {
                var otherInput = document.getElementById('jabatan_lainnya');
                if (selectElement.value === 'Lainnya') {
                    otherInput.style.display = 'block';
                    otherInput.required = true;
                } else {
                    otherInput.style.display = 'none';
                    otherInput.required = false;
                }
            }
        </script>

        <!-- Modal HTML -->
        <div class="modal fade" id="confirmSaveModal" tabindex="-1" role="dialog"
            aria-labelledby="confirmSaveModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmSaveModalLabel">Konfirmasi Simpan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menyimpan data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="confirmSaveButton">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('dosenForm');
                const saveButton = document.querySelector('button[type="submit"]');
                const confirmSaveButton = document.getElementById('confirmSaveButton');

                saveButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    if (form.checkValidity()) {
                        $('#confirmSaveModal').modal('show');
                    } else {
                        form.reportValidity();
                    }
                });

                confirmSaveButton.addEventListener('click', function() {
                    form.submit();
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
                    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
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
                });

                document.getElementById('dosenForm').addEventListener('submit', function(e) {
                    tinymce.triggerSave(); // Ensure TinyMCE content is saved in the textarea
                    var tentangContent = tinymce.get('tentang').getContent();
                    var jabatanContent = tinymce.get('jabatan').getContent();
                    var pendidikanContent = tinymce.get('pendidikan').getContent();
                    var prestasiContent = tinymce.get('prestasi').getContent();
                    var publikasiContent = tinymce.get('publikasi').getContent();

                    if (tentangContent === '' || jabatanContent === '' || pendidikanContent === '' ||
                        prestasiContent === '' || publikasiContent === '') {
                        alert('Semua bidang yang diinisialisasi TinyMCE harus diisi.');
                        e.preventDefault(); // Prevent the form from submitting
                    }
                });
            });
        </script>
    @endsection
