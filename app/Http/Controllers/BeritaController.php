<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Prestasi;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $profil = Profil::first();
        $prodi = Prodi::all();
        $cari = $request->input('cari');
        $tahun = $request->input('tahun');
        $bulan = $request->input('bulan');
        $tanggal = $request->input('tanggal');
        $notifikasi = ""; // Variabel notifikasi
        $sort = $request->input('sort');

        $berita = Berita::query();
        // Filter dan urutan berdasarkan tanggal
        if ($sort === 'terbaru') {
            $berita->orderBy('tanggal', 'desc');
        } elseif ($sort === 'terlama') {
            $berita->orderBy('tanggal', 'asc');
        }


        // Filter untuk pencarian
        if (!empty($cari)) {
            $berita->where('judul', 'like', '%' . $cari . '%');
        }

        // Filter berdasarkan tahun
        if (!empty($tahun)) {
            $berita->whereYear('tanggal', $tahun);
        }

        // Filter berdasarkan bulan
        if (!empty($bulan)) {
            $berita->whereMonth('tanggal', $bulan);
        }

        // Filter berdasarkan tanggal
        if (!empty($tanggal)) {
            $berita->whereDay('tanggal', $tanggal);
        }

        // Urutan standar berdasarkan tanggal pembuatan
        $berita->orderBy('created_at', 'desc');

        $berita = $berita->paginate(6);

        // Notifikasi jika hasil pencarian tidak ditemukan
        if (!empty($cari) && $berita->isEmpty()) {
            $notifikasi = "Hasil pencarian tentang '{$cari}' tidak ditemukan.";
        }

        $news = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();

        return view('berita', compact('news', 'berita', 'prodi', 'profil', 'notifikasi', 'announcement'));
    }


    public function read(Request $request, $slug)
    {
        $profil = Profil::first();
        $beritaSidebar = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $prodi = Prodi::all();
        $news = Berita::orderBy('created_at', 'desc')->take(3)->get();

        $cari = $request->input('cari');
        $notifikasi = "";

        if (!empty($cari)) {
            $beritaTerkait = Berita::where('judul', 'like', '%' . $cari . '%')->orderBy('created_at', 'desc')->paginate(10);
            if ($beritaTerkait->isEmpty()) {
                $notifikasi = "Hasil pencarian tentang '{$cari}' tidak ditemukan.";
            } else {
                $notifikasi = "Hasil pencarian tentang '{$cari}':";
            }
        } else {
            $beritaTerkait = Berita::orderBy('created_at', 'desc')->paginate(10);
        }

        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
        return view('read-berita', compact('berita', 'news', 'prodi', 'profil', 'beritaTerkait', 'beritaSidebar', 'notifikasi', 'announcement'));
    }
}
