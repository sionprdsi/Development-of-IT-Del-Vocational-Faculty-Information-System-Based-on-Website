<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Semester;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class Beasiswa_Controller extends Controller
{
    public function index(Request $request)
    {
        // Mengelompokkan beasiswa berdasarkan judul_beasiswa
        $beasiswas = Beasiswa::all()->groupBy('judul_beasiswa');

        $prodi = Prodi::all();
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $detail = null;
        $semester = null;
        $dosen = null;
        $profil = Profil::first();
        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();

        return view('beasiswa', compact('beasiswas', 'prodi', 'detail', 'semester', 'dosen', 'berita', 'profil', 'announcement'));
    }
}
