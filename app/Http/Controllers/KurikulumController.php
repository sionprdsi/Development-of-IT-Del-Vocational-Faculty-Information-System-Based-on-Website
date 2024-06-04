<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Prestasi;
use App\Models\Semester;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\Profil;

class KurikulumController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $detail = null;
        $semester = null;
        $dosen = null;
        $data_semester = ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6'];

        $profil = Profil::first();

        if ($request->has('q')) {
            $slug = $request->input('q');
            $detail = Prodi::where('slug', $slug)->first();

            if ($detail) {
                $semester = Semester::where('prodi_id', $detail->id)->orderBy('note')->get();
                $dosen = Dosen::where('prodi_id', $detail->id)->get();

                // Periksa apakah program studi adalah D-3
                if (strpos($detail->nama, 'Diploma Tiga (D-3) Teknologi Informasi') !== false || strpos($detail->nama, 'Diploma Tiga (D-3) Teknologi Komputer') !== false) {
                    $data_semester = ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6'];
                } else {
                    // Jika bukan D-3, tampilkan hingga semester 8
                    $data_semester = ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6', 'Semester 7', 'Semester 8'];
                }
            } else {
                $detail = null;
            }
        }

        $announcement = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
        return view('kurikulum', compact('prodi', 'detail', 'semester', 'dosen', 'berita', 'data_semester', 'profil', 'announcement'));
    }
}
