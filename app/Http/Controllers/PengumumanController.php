<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();
        $cari = $request->input('cari');
        $sort = $request->input('sort');
        $filter = $request->input('filter');
        $profil = Profil::first();

        $notifikasi = ""; // Variabel notifikasi

        // Query untuk pencarian
        $pengumumans = Pengumuman::query();

        // Filter untuk pencarian
        if (!empty($cari)) {
            $pengumumans->where('judul', 'like', '%' . $cari . '%');
        }

        // Filter dan urutan berdasarkan tanggal terbaru
        if ($sort === 'terbaru') {
            $pengumumans->orderBy('tanggal', 'desc');
        } elseif ($sort === 'terlama') {
            $pengumumans->orderBy('tanggal', 'asc');
        } else {
            $pengumumans->orderBy('created_at', 'desc');
        }

        // Filter berdasarkan tanggal, bulan, dan tahun
        if (!empty($filter)) {
            $tanggal = date('Y-m-d', strtotime($filter));
            $pengumumans->whereDate('tanggal', $tanggal);
        }

        // Ambil data dengan pagination
        $pengumumans = $pengumumans->paginate(6);

        // Notifikasi jika hasil pencarian tidak ditemukan
        if (!empty($cari) && $pengumumans->isEmpty()) {
            $notifikasi = "Hasil pencarian tentang '{$cari}' tidak ditemukan.";
        }

        $news = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(6)->get();

        return view('pengumuman', compact('pengumumans', 'news', 'prodi', 'notifikasi', 'announcement', 'profil'));
    }
}

