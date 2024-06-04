<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profil = Profil::first();

        return view('admin.profil.index', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = Profil::first();
        $data = $request->only(['nama', 'alamat', 'kode_pos', 'telepon', 'email', 'karir', 'peta', 'kenapa_vokasi', 'facebook', 'twitter', 'youtube', 'instagram']);

        // Periksa panjang teks 'nama' yang akan disimpan
        $nama = $request->input('nama');
        if (strlen($nama) > 255) { // Sesuaikan panjang maksimum kolom 'nama'
            // Jika panjang teks melebihi batas, potong teks menjadi panjang yang sesuai
            $data['nama'] = substr($nama, 0, 255);
        }

        // Lanjutkan proses seperti biasa
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('public/logos');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('public/videos');
        }

        if ($profil) {
            $profil->update($data);
        } else {
            Profil::create($data);
        }

        return redirect()->back()->with('success', 'Profil updated successfully');
    }

}
