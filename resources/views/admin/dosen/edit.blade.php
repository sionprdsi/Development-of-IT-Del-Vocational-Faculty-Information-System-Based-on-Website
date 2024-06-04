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
                <form action="{{ route('admin.dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="title-label" class="nav-item">
                            <a class="nav-link active" id="informasi-dasar-tab" data-toggle="tab" href="#informasi-dasar"
                                role="tab" aria-controls="informasi-dasar" aria-selected="true">Informasi Dasar</a>
                        </li>
                        <li class="title-label" class="nav-item">
                            <a class="nav-link" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab"
                                aria-controls="tentang" aria-selected="false">Tentang</a>
                        </li>
                        <!-- Tambahkan tab lainnya sesuai kebutuhan -->
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
                        <div class="tab-pane fade show active" id="informasi-dasar" role="tabpanel"
                            aria-labelledby="informasi-dasar-tab">
                            <div class="form-group">
                                <label class="title-label" for="nama">Nama Dosen<span
                                        class="small text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" value="{{ $dosen->nama }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="title-label" for="nidn">NIDN<span
                                        class="small text-danger">*</span></label>
                                <input type="text" name="nidn" id="nidn" value="{{ $dosen->nidn }}" placeholder="Masukkan NIDN dosen"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="title-label" for="jabatan">Jabatan<span
                                        class="small text-danger">*</span></label>
                                <select name="jabatan" id="jabatan" class="form-control" required
                                    onchange="toggleOtherInput(this)">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Dekan Fakultas Vokasi"
                                        {{ $dosen->jabatan == 'Dekan Fakultas Vokasi' ? 'selected' : '' }}>Dekan Fakultas
                                        Vokasi</option>
                                    <option value="Dosen Fakultas Vokasi"
                                        {{ $dosen->jabatan == 'Dosen Fakultas Vokasi' ? 'selected' : '' }}>Dosen Fakultas
                                        Vokasi</option>
                                    <option value="Rektor Institut Teknologi Del"
                                        {{ $dosen->jabatan == 'Rektor Institut Teknologi Del' ? 'selected' : '' }}>Rektor
                                        Institut Teknologi Del</option>
                                    <option value="Staf Fakultas Vokasi"
                                        {{ $dosen->jabatan == 'Staf Fakultas Vokasi' ? 'selected' : '' }}>Staf Fakultas
                                        Vokasi</option>
                                    <option value="Kepala Program Studi Teknologi Rekayasa Perangkat Lunak"
                                        {{ $dosen->jabatan == 'Kepala Program Studi Teknologi Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                        Kepala Program Studi Teknologi Rekayasa Perangkat Lunak</option>
                                    <option value="Kepala Program Studi Teknologi Informasi"
                                        {{ $dosen->jabatan == 'Kepala Program Studi Teknologi Informasi' ? 'selected' : '' }}>
                                        Kepala Program Studi Teknologi Informasi</option>
                                    <option value="Kepala Program Studi Teknologi Komputer"
                                        {{ $dosen->jabatan == 'Kepala Program Studi Teknologi Komputer' ? 'selected' : '' }}>
                                        Kepala Program Studi Teknologi Komputer</option>
                                    <option value="Lainnya"
                                        {{ !in_array($dosen->jabatan, ['Dekan Fakultas Vokasi', 'Dosen Fakultas Vokasi', 'Rektor Institut Teknologi Del', 'Staf Fakultas Vokasi', 'Kepala Program Studi Teknologi Rekayasa Perangkat Lunak', 'Kepala Program Studi Teknologi Informasi', 'Kepala Program Studi Teknologi Komputer']) ? 'selected' : '' }}>
                                        Lainnya</option>
                                </select>
                                <input type="text" name="jabatan_lainnya" id="jabatan_lainnya"
                                    placeholder="Masukkan jabatan lainnya" class="form-control mt-2"
                                    style="display: {{ !in_array($dosen->jabatan, ['Dekan Fakultas Vokasi', 'Dosen Fakultas Vokasi', 'Rektor Institut Teknologi Del', 'Staf Fakultas Vokasi', 'Kepala Program Studi Teknologi Rekayasa Perangkat Lunak', 'Kepala Program Studi Teknologi Informasi', 'Kepala Program Studi Teknologi Komputer']) ? 'block' : 'none' }};"
                                    value="{{ !in_array($dosen->jabatan, ['Dekan Fakultas Vokasi', 'Dosen Fakultas Vokasi', 'Rektor Institut Teknologi Del', 'Staf Fakultas Vokasi', 'Kepala Program Studi Teknologi Rekayasa Perangkat Lunak', 'Kepala Program Studi Teknologi Informasi', 'Kepala Program Studi Teknologi Komputer']) ? $dosen->jabatan : '' }}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="card shadow-sm"
                                    style="border-radius: 12px; overflow: hidden; padding: 20px; border: 1px solid #ddd;">
                                    <div class="form-group">
                                        <label class="title-label" for="gambar"
                                            style="font-weight: bold; color: #333; display: block; margin-bottom: 10px;">
                                            Foto <span class="small text-danger">*</span>
                                        </label>
                                        <input type="file" name="gambar" id="gambar" class="form-control"
                                            style="border-radius: 8px; border: 1px solid #ccc; padding: 10px;">
                                        @if (isset($dosen->gambar))
                                            <div class="position-relative mt-2" style="display: inline-block;">
                                                <img src="{{ Storage::url($dosen->gambar) }}" alt="Foto Dekan"
                                                    class="img-thumbnail"
                                                    style="border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 300px;">
                                                <button type="button" class="btn btn-danger btn-sm position-absolute"
                                                    style="top: 10px; right: 10px; border-radius: 50%;"
                                                    data-toggle="modal" data-target="#confirmDeleteModal">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                            <input type="checkbox" name="hapus_gambar" id="hapus_gambar" class="d-none">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus Foto
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus foto ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-danger"
                                                id="confirmDeleteButton">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                            <div class="form-group">
                                <label class="title-label" for="tentang">Tentang<span
                                        class="small text-danger">*</span></label>
                                <textarea name="tentang" id="tentang" class="form-control tinymce" required>{{ $dosen->tentang }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <div class="form-group">
                                <label class="title-label" for="pendidikan">Pendidikan<span
                                        class="small text-danger">*</span></label>
                                <textarea name="pendidikan" id="pendidikan" class="form-control tinymce" required>{{ $dosen->pendidikan }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                            <div class="form-group">
                                <label class="title-label" for="prestasi">Prestasi<span
                                        class="small text-danger">*</span></label>
                                <textarea name="prestasi" id="prestasi" class="form-control tinymce" required>{{ $dosen->prestasi }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
                            <div class="form-group">
                                <label class="title-label" for="publikasi">Publikasi<span
                                        class="small text-danger">*</span></label>
                                <textarea name="publikasi" id="publikasi" class="form-control tinymce" required>{{ $dosen->publikasi }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pengalaman_kerja" role="tabpanel"
                            aria-labelledby="pengalaman_kerja-tab">
                            <div class="form-group">
                                <label class="title-label" for="pengalaman_kerja">Pengalaman Kerja<span
                                        class="small text-danger">*</span></label>
                                <textarea name="pengalaman_kerja" id="pengalaman_kerja" class="form-control tinymce" required>{{ $dosen->pengalaman_kerja }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keahlian" role="tabpanel" aria-labelledby="keahlian-tab">
                            <div class="form-group">
                                <label class="title-label" for="keahlian">Keahlian<span
                                        class="small text-danger">*</span></label>
                                <textarea name="keahlian" id="keahlian" class="form-control tinymce" required>{{ $dosen->keahlian }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pengabdian_masyarakat" role="tabpanel"
                            aria-labelledby="pengabdian_masyarakat-tab">
                            <div class="form-group">
                                <label class="title-label" for="pengabdian_masyarakat">Pengabdian Kepada Masyarakat<span
                                        class="small text-danger">*</span></label>
                                <textarea name="pengabdian_masyarakat" id="pengabdian_masyarakat" class="form-control tinymce" required>{{ $dosen->pengabdian_masyarakat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="prodi_id">Program Studi<span
                                class="small text-danger">*</span></label>
                        <select name="prodi_id" id="prodi_id" class="form-control" required>
                            @foreach ($prodi as $p)
                                <option value="{{ $p->id }}" {{ $dosen->prodi_id == $p->id ? 'selected' : '' }}>
                                    {{ $p->nama }}
                                </option>
                            @endforeach
                        </select>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Perbarui</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
