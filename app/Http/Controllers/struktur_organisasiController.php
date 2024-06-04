<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Tentang;
use App\Models\Semester;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\KalenderAkademik;
use App\Models\OrganisationalStructure;

class Struktur_organisasiController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();
        $profil = Profil::first(); // Tambahkan ini untuk mengambil data profil
        $struktur_organisasi = OrganisationalStructure::first();
        return view('struktur_organisasi', compact('struktur_organisasi','profil', 'prodi'));
    }
}
