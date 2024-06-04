<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class EventController extends Controller
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
        $eventsQuery = Event::query();

        if (!empty($cari)) {
            $eventsQuery->where(function ($query) use ($cari) {
                $query->where('nama', 'like', '%' . $cari . '%')
                    ->orWhere('detail', 'like', '%' . $cari . '%')
                    ->orWhere('tanggal', 'like', '%' . $cari . '%')
                    ->orWhere('keterangan', 'like', '%' . $cari . '%');
            });
        }

        // Menghitung jumlah hasil pencarian
        $jumlah_hasil_pencarian = $eventsQuery->count();

        // Notifikasi jika hasil pencarian tidak ditemukan
        if (!empty($cari) && $jumlah_hasil_pencarian === 0) {
            $notifikasi = "Hasil pencarian tentang '{$cari}' tidak ditemukan.";
        }

        // Urutan berdasarkan tanggal terbaru
        $eventsQuery->orderBy('created_at', 'desc');

        // Menggunakan pagination
        $events = $eventsQuery->paginate(10);

        // Ambil data berita terbaru
        $news = Berita::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil data pengumuman terbaru
        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();

        return view('event', compact('events', 'news', 'prodi', 'profil', 'announcement', 'notifikasi'));
    }

}
