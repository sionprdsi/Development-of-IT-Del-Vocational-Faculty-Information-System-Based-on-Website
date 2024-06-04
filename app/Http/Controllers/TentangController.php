<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Profil;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();
        $profil = Profil::first(); // Tambahkan ini untuk mengambil data profil
        $tentang = Tentang::first();
        return view('tentang', compact('tentang', 'prodi','profil'));
    }
    public function visimisi(Request $request)
    {
        $prodi = Prodi::all();
        $profil = Profil::first(); // Tambahkan ini untuk mengambil data profil
        $tentang = Tentang::first();
        $visimisi= Tentang::first();
        return view('visimisi', compact('tentang', 'prodi','profil','visimisi'));
    }

    public function tujuanvokasi(Request $request)
    {
        $prodi = Prodi::all();
        $profil = Profil::first(); // Tambahkan ini untuk mengambil data profil
        $tentang = Tentang::first();
        $tujuanvokasi = Tentang::first();
        return view('tujuanvokasi', compact('tentang', 'prodi','profil','tujuanvokasi'));
    }
}
