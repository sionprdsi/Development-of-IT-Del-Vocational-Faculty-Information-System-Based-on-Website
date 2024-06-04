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
use App\Models\KataSambutan;

class SambutanController extends Controller
{
    public function index(Request $request)
    {
        $kata_sambutan_dekan = KataSambutan::all();
        $prodi = Prodi::all();
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $detail = null;
        $semester = null;
        $dosen = null;
        $profil = Profil::first();


        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
        return view('kata_sambutan_dekan', compact('prodi', 'detail', 'semester', 'dosen', 'berita', 'profil', 'announcement', 'kata_sambutan_dekan'));
    }
}
