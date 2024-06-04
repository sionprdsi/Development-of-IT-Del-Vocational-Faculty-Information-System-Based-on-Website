<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Prodi;
use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Slider;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $galeri = Galeri::orderBy('id', 'asc')->take(100)->get();
        $slider = Slider::orderBy('id', 'asc')->take(15)->get();
        $prodi = Prodi::all();
        $profil = Profil::first();
        $alumni = Alumni::all();

        // Ambil 4 agenda terbaru
        $events = Event::latest()->take(4)->get();

        // Query untuk pencarian
        $pengumumans = Pengumuman::query();

        // Filter untuk pencarian
        if ($request->has('cari')) {
            $pengumumans->where('judul', 'like', '%' . $request->cari . '%');
        }

        // Filter dan urutan berdasarkan tanggal terbaru
        if ($request->has('sort')) {
            if ($request->sort === 'terbaru') {
                $pengumumans->orderBy('tanggal', 'desc');
            } elseif ($request->sort === 'terlama') {
                $pengumumans->orderBy('tanggal', 'asc');
            } else {
                $pengumumans->orderBy('created_at', 'desc');
            }
        } else {
            $pengumumans->orderBy('created_at', 'desc');
        }

        // Filter berdasarkan tanggal, bulan, dan tahun
        if ($request->has('filter')) {
            $tanggal = date('Y-m-d', strtotime($request->filter));
            $pengumumans->whereDate('tanggal', $tanggal);
        }

        $pengumumans = $pengumumans->paginate(6);

        // Mengambil berita terbaru
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();

        return view('beranda', compact('profil', 'prodi', 'galeri', 'berita', 'slider', 'pengumumans', 'events', 'alumni'));
    }
}
