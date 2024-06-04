<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Prestasi;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();
        $profil = Profil::first();
        $notifikasi = ""; // Variabel notifikasi
        $cari = $request->input('cari');

        // Ambil data prestasi dari database berdasarkan tahun dan filter
        $selectedYear = $request->input('tahun');
        $prestasiQuery = Prestasi::query();

        if ($selectedYear) {
            $prestasiQuery->where('tahun', $selectedYear);
        }

        if (!empty($cari)) {
            $prestasiQuery->where(function ($query) use ($cari) {
                $query->where('nama_prestasi', 'like', '%' . $cari . '%')
                    ->orWhere('nama', 'like', '%' . $cari . '%')
                    ->orWhere('tingkat', 'like', '%' . $cari . '%')
                    ->orWhere('juara', 'like', '%' . $cari . '%');
            });
        }

        $prestasiResults = $prestasiQuery->orderBy('tahun', 'desc')->get();
        $prestasiByYear = $prestasiResults->groupBy('tahun');

        // Loop melalui setiap tahun dan periksa apakah ada permintaan untuk mengubah jumlah entri
        foreach ($prestasiByYear as $tahun => $prestasis) {
            $jumlah_entri_key = 'jumlah_entri_' . $tahun;
            $jumlah_entri = $request->input($jumlah_entri_key, 5);

            // Batasi jumlah entri sesuai permintaan pengguna
            $prestasiByYear[$tahun] = $prestasis->take($jumlah_entri);
        }

        // Notifikasi jika hasil pencarian tidak ditemukan
        if (!empty($cari) && $prestasiResults->isEmpty()) {
            $notifikasi = "Hasil pencarian tentang '{$cari}' tidak ditemukan.";
        }

        // Menggunakan pagination
        $prestasiQuery = Prestasi::query(); // Ubah menjadi mengambil data prestasi tanpa filter tahun
        if ($selectedYear) {
            $prestasiQuery->where('tahun', $selectedYear);
        }

        if (!empty($cari)) {
            $prestasiQuery->where(function ($query) use ($cari) {
                $query->where('nama_prestasi', 'like', '%' . $cari . '%')
                    ->orWhere('nama', 'like', '%' . $cari . '%')
                    ->orWhere('tingkat', 'like', '%' . $cari . '%')
                    ->orWhere('juara', 'like', '%' . $cari . '%');
            });
        }

        $prestasiQuery = $prestasiQuery->orderBy('tahun', 'desc')->paginate(1); // Ubah menjadi menggunakan pagination dengan jumlah 1

        // Memastikan nomor halaman yang benar terkirim dalam permintaan
        if ($prestasiQuery->currentPage() > $prestasiQuery->lastPage()) {
            $prestasiQuery = $prestasiQuery->setPage($prestasiQuery->lastPage());
        }


        $news = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();

        return view('prestasi', compact('prestasiByYear', 'news', 'prodi', 'profil', 'announcement', 'request', 'selectedYear', 'notifikasi', 'prestasiQuery'));
    }
}
