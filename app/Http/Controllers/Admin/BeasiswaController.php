<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Beasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $beasiswas = Beasiswa::all();
        return view('admin.beasiswa.index', compact('beasiswas'));
    }

    public function create()
    {
        return view('admin.beasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_beasiswa' => 'required|string|max:255',
            'jenis_beasiswa' => 'required|string',
            'deskripsi_beasiswa' => 'required|string',
            'foto_beasiswa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul_manual' => 'required_if:judul_beasiswa,lainnya',
            'jenis_manual' => 'required_if:jenis_beasiswa,lainnya',
        ]);

        $beasiswa = new Beasiswa();
        $beasiswa->id = (string) Str::uuid(); // Generate id otomatis dan konversi ke string

        // Set judul beasiswa
        if ($request->judul_beasiswa === 'lainnya') {
            $beasiswa->judul_beasiswa = $request->judul_manual;
        } else {
            $beasiswa->judul_beasiswa = $request->judul_beasiswa;
        }

        // Set jenis beasiswa
        if ($request->jenis_beasiswa === 'lainnya') {
            $beasiswa->jenis_beasiswa = $request->jenis_manual;
        } else {
            $beasiswa->jenis_beasiswa = $request->jenis_beasiswa;
        }

        $beasiswa->deskripsi_beasiswa = $request->deskripsi_beasiswa;

        if ($request->hasFile('foto_beasiswa')) {
            $fotoPath = $request->file('foto_beasiswa')->store('public/foto_beasiswa');
            $beasiswa->foto_beasiswa = $fotoPath;
        }

        $beasiswa->save();

        return redirect()->route('admin.beasiswa')->with('success', 'Beasiswa Berhasil Ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_beasiswa' => 'required|string|max:255',
            'deskripsi_beasiswa' => 'required|string',
            'foto_beasiswa' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
            'judul_manual' => 'required_if:judul_beasiswa,lainnya',
            'jenis_manual' => 'required_if:jenis_beasiswa,lainnya',
        ]);

        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->judul_beasiswa = $request->judul_beasiswa === 'lainnya' ? $request->judul_manual : $request->judul_beasiswa;
        $beasiswa->jenis_beasiswa = $request->jenis_beasiswa === 'lainnya' ? $request->jenis_manual : $request->jenis_beasiswa;
        $beasiswa->deskripsi_beasiswa = $request->deskripsi_beasiswa;

        if ($request->hasFile('foto_beasiswa')) {
            $fotoPath = $request->file('foto_beasiswa')->store('public/foto_beasiswa');
            $beasiswa->foto_beasiswa = $fotoPath;
        }

        $beasiswa->save();

        return redirect()->back()->with('success', 'Data Beasiswa berhasil diperbarui');
    }

    public function edit($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('admin.beasiswa.edit', compact('beasiswa'));
    }

    public function destroy($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);

        if ($beasiswa->foto_beasiswa) {
            Storage::delete($beasiswa->foto_beasiswa);
        }

        $beasiswa->delete();

        return redirect()->route('admin.beasiswa')->with('success', 'Teks Beasiswa berhasil dihapus.');
    }
}
