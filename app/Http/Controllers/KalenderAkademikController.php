<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Semester;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\KalenderAkademik;

class KalenderAkademikController extends Controller
{
    public function index(Request $request)
    {
        $kalenderAkademik = KalenderAkademik::all();
        $prodi = Prodi::all();
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $detail = null;
        $semester = null;
        $dosen = null;
        $profil = Profil::first();


        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
        return view('kalender_akademik', compact('prodi', 'detail', 'semester', 'dosen', 'berita', 'profil', 'announcement', 'kalenderAkademik'));
    }
}
