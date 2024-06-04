@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Tambah Info Beasiswa Akademik') }}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/beasiswa" style="text-decoration: none; color: #4C74DC;">Halaman Beasiswa Akademik</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Halaman Tambah Info Beasiswa Akademik</li>
            </ol>
        </nav>
    </div>

    <div class="card border-0 rounded-3 shadow">
        <div class="card-body">
            <form action="{{ route('admin.beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Judul Beasiswa -->
                <div class="form-group">
                    <label for="judul_beasiswa">Judul Beasiswa</label>
                    <select class="form-control" id="judul_beasiswa" name="judul_beasiswa" required onchange="showJudulManual(this)">
                        <option value="Beasiswa Institut Teknologi Del">Beasiswa Institut Teknologi Del</option>
                        <option value="lainnya">Lainnya</option> <!-- Tambahkan opsi "lainnya" -->
                    </select>
                    <input type="text" class="form-control mt-2" id="judul_manual" name="judul_manual" style="display:none;">
                </div>

                <!-- Jenis Beasiswa -->
                <div class="form-group">
                    <label for="jenis_beasiswa">Jenis Beasiswa</label>
                    <select class="form-control" id="jenis_beasiswa" name="jenis_beasiswa" required onchange="showJenisManual(this)">
                        <option value="Beasiswa Prestasi">Beasiswa Prestasi</option>
                        <option value="Beasiswa Pendidikan">Beasiswa Pendidikan</option>
                        <option value="Beasiswa Penelitian">Beasiswa Penelitian</option>
                        <option value="lainnya">Lainnya</option> <!-- Tambahkan opsi "lainnya" -->
                    </select>
                    <input type="text" class="form-control mt-2" id="jenis_manual" name="jenis_manual" style="display:none;">
                </div>

                <!-- Foto Beasiswa -->
                <div class="form-group">
                    <label for="foto_beasiswa">Foto Beasiswa</label>
                    <input type="file" class="form-control-file" id="foto_beasiswa" name="foto_beasiswa">
                </div>

                <!-- Deskripsi Beasiswa -->
                <div class="form-group">
                    <label for="deskripsi_beasiswa">Deskripsi Beasiswa</label>
                    <textarea class="form-control" id="deskripsi_beasiswa" name="deskripsi_beasiswa" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>

    <script>
        function showJudulManual(select) {
            var judulManualInput = document.getElementById("judul_manual");
            if (select.value === "lainnya") {
                judulManualInput.style.display = "block";
                judulManualInput.setAttribute("required", true);
            } else {
                judulManualInput.style.display = "none";
                judulManualInput.removeAttribute("required");
            }
        }

        function showJenisManual(select) {
            var jenisManualInput = document.getElementById("jenis_manual");
            if (select.value === "lainnya") {
                jenisManualInput.style.display = "block";
                jenisManualInput.setAttribute("required", true);
            } else {
                jenisManualInput.style.display = "none";
                jenisManualInput.removeAttribute("required");
            }
        }
    </script>

@endsection
