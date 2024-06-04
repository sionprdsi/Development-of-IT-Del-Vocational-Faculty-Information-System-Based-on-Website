<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class Dosen_Controller extends Controller
{
    public function index(Request $request)
    {
        $dosenprodi = Dosen::all();
        $prodi = Prodi::all();
        $profil = Profil::first();
        $notifikasi = ""; // Variabel notifikasi
        $search = $request->input('search'); // Mengambil input pencarian nama dosen
        $prodiId = $request->input('prodi_id'); // Mengambil input prodi_id

        // Ambil query dasar untuk data dosen
        $query = Dosen::query();

        // Filter berdasarkan nama dosen jika ada
        if (!empty($search)) {
            $query->where('nama', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan prodi_id jika ada
        if (!empty($prodiId)) {
            $query->where('prodi_id', $prodiId);
        }

        // Ambil data dengan pagination setelah menerapkan filter
        $dosenPaginate = $query->paginate(12);

        // Notifikasi jika hasil pencarian tidak ditemukan
        if (($request->has('search') || $request->has('prodi_id')) && $dosenPaginate->isEmpty()) {
            $notifikasi = "Hasil pencarian tidak ditemukan.";
        }

        return view('dosen', compact('prodi', 'dosenPaginate', 'profil', 'dosenprodi', 'notifikasi'));
    }



    public function detail(Request $request, $id)
    {
        $prodi = Prodi::all();
        $profil = Profil::first();

        // Temukan data dosen berdasarkan ID
        $detaildosen = Dosen::findOrFail($id);

        // Ambil informasi fakultas dari model Prodi terkait
        $fakultas = Prodi::find($detaildosen->prodi_id)->fakultas;

        // Mengambil dan menyertakan nilai nidn dan fakultas ke dalam data dosen yang dikirimkan ke view
        $detaildosen->nidn = $detaildosen->nidn;
        $detaildosen->fakultas = $fakultas;

        return view('detaildosen', compact('detaildosen', 'prodi', 'profil'));
    }


}
