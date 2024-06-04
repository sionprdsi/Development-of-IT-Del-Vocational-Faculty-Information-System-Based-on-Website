@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="page-header mb-4">
        <h1 class="h2 text-primary font-weight-bold mb-3" style="border-bottom: 2px solid #4C74DC; padding-bottom: 10px;">
            {{ __('Halaman Edit Semester Program Studi') }}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light rounded shadow-sm p-3 mb-0">
                <li class="breadcrumb-item"><a href="/admin/home" style="text-decoration: none; color: #4C74DC;">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/semester" style="text-decoration: none; color: #4C74DC;">Semester</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4C74DC;">Halaman Edit Semester Program Studi</li>
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

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.semester.update', $semester->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="title-label" for="prodi_id">Pilih Program Studi<span class="small text-danger">*</span></label>
                        <select name="prodi_id" id="prodi_id" class="form-control" required>
                            @foreach ($prodis as $p)
                                <option value="{{ $p->id }}" {{ $semester->prodi_id == $p->id ? 'selected' : '' }}>
                                    {{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="note">Pilih Semester<span class="small text-danger">*</span></label>
                        <select name="note" id="note" class="form-control" required>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="Semester {{ $i }}"
                                    {{ $semester->note == "Semester $i" ? 'selected' : '' }}>Semester {{ $i }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="matkul">Mata Kuliah<span class="small text-danger">*</span></label>
                        <input type="text" class="form-control" id="matkul" name="matkul"
                            value="{{ $semester->matkul }}" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="kode">Kode<span class="small text-danger">*</span></label>
                        <input type="text" class="form-control" id="kode" name="kode"
                            value="{{ $semester->kode }}" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="sks">SKS<span class="small text-danger">*</span></label>
                        <input type="number" class="form-control" id="sks" name="sks"
                            value="{{ $semester->sks }}" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="teori">Teori<span class="small text-danger">*</span></label>
                        <input type="number" class="form-control" id="teori" name="teori"
                            value="{{ $semester->teori }}" required>
                    </div>
                    <div class="form-group">
                        <label class="title-label" for="praktikum">Praktikum<span class="small text-danger">*</span></label>
                        <input type="number" class="form-control" id="praktikum" name="praktikum"
                            value="{{ $semester->praktikum }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Perbarui
                    </button>
                </form>
            </div>
        </div>

    </div>

@endsection
