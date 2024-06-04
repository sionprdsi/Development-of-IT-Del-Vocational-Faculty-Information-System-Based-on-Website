@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="page-header mb-4">
            <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
                {{ __('Edit Halaman Beasiswa Akademik') }}
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                    <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a>
                    <li class="breadcrumb-item"><a href="/admin/beasiswa" style="text-decoration: none; color: #4C74DC;">Info
                            Beasiswa</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Edit Halaman Info
                        Beasiswa</li>
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

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.beasiswa.update', $beasiswa->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Foto Beasiswa -->
                    <div class="form-group">
                        <label for="foto_beasiswa">Foto Beasiswa</label>
                        <input type="file" class="form-control-file" id="foto_beasiswa" name="foto_beasiswa">
                        @if ($beasiswa->foto_beasiswa)
                            <img src="{{ Storage::url($beasiswa->foto_beasiswa) }}" alt="Foto Beasiswa"
                                class="img-thumbnail mt-2" style="width: 150px;">
                        @endif
                    </div>

                    <!-- Judul Beasiswa -->
                    <div class="form-group">
                        <label for="judul_beasiswa">Judul Beasiswa</label>
                        <select class="form-control" id="judul_beasiswa" name="judul_beasiswa" required
                            onchange="showJudulManual(this)">
                            <option value="Beasiswa Institut Teknologi Del"
                                {{ $beasiswa->judul_beasiswa === 'Beasiswa Institut Teknologi Del' ? 'selected' : '' }}>
                                Beasiswa Institut Teknologi Del</option>
                            <!-- Tambahkan opsi untuk judul beasiswa lainnya -->
                            <option value="Beasiswa Alumni"
                                {{ $beasiswa->judul_beasiswa === 'Beasiswa Alumni' ? 'selected' : '' }}>Beasiswa Alumni
                            </option>
                            <option value="lainnya"
                                {{ !in_array($beasiswa->judul_beasiswa, ['Beasiswa Institut Teknologi Del', 'Beasiswa Alumni']) ? 'selected' : '' }}>
                                Lainnya</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="judul_manual" name="judul_manual"
                            style="{{ in_array($beasiswa->judul_beasiswa, ['Beasiswa Institut Teknologi Del', 'Beasiswa Alumni']) ? 'display:none;' : '' }}"
                            value="{{ $beasiswa->judul_beasiswa }}">
                    </div>

                    <!-- Jenis Beasiswa -->
                    <div class="form-group">
                        <label for="jenis_beasiswa">Jenis Beasiswa</label>
                        <select class="form-control" id="jenis_beasiswa" name="jenis_beasiswa" required
                            onchange="showJenisManual(this)">
                            <!-- Tambahkan opsi untuk jenis beasiswa lainnya -->
                            <option value="Beasiswa Prestasi"
                                {{ $beasiswa->jenis_beasiswa === 'Beasiswa Prestasi' ? 'selected' : '' }}>Beasiswa Prestasi
                            </option>
                            <option value="Beasiswa Alumni"
                                {{ $beasiswa->jenis_beasiswa === 'Beasiswa Alumni' ? 'selected' : '' }}>Beasiswa Alumni
                            </option>
                            <option value="lainnya" {{ $beasiswa->jenis_beasiswa === 'lainnya' ? 'selected' : '' }}>Lainnya
                            </option>
                        </select>
                        <input type="text" class="form-control mt-2" id="jenis_manual" name="jenis_manual"
                            style="{{ $beasiswa->jenis_beasiswa !== 'lainnya' ? 'display:none;' : '' }}"
                            value="{{ $beasiswa->jenis_beasiswa }}">
                    </div>


                    <!-- Deskripsi Beasiswa -->
                    <div class="form-group">
                        <label for="deskripsi_beasiswa">Deskripsi Beasiswa</label>
                        <textarea class="form-control" id="deskripsi_beasiswa" name="deskripsi_beasiswa" rows="5" required>{{ $beasiswa->deskripsi_beasiswa }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                </form>
            </div>
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
