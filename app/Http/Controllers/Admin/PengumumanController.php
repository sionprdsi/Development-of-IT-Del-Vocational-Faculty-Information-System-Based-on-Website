<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::paginate(5); // Menampilkan 5 item per halaman

        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('foto') ? $request->file('foto')->store('public/foto_pengumuman') : null;

        $pengumuman = new Pengumuman([
            'judul' => $request->get('judul'),
            'konten' => $request->get('konten'),
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'foto' => $path,
        ]);
        $pengumuman->save();

        // Redirect to index page after creating announcement
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($pengumuman->foto) {
                Storage::delete($pengumuman->foto);
            }
            $path = $request->file('foto')->store('public/foto_pengumuman');
        } else {
            $path = $pengumuman->foto;
        }

        $pengumuman->judul = $request->get('judul');
        $pengumuman->konten = $request->get('konten');
        $pengumuman->tanggal = $request->get('tanggal');
        $pengumuman->keterangan = $request->get('keterangan');
        $pengumuman->foto = $path;
        $pengumuman->save();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        if ($pengumuman->foto) {
            Storage::delete($pengumuman->foto);
        }
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
