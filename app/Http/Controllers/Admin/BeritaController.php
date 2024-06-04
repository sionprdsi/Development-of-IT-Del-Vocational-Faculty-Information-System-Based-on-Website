<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Menampilkan halaman daftar berita.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::paginate(5);
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Menampilkan form untuk membuat berita baru.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image',
            'konten' => 'required|string',
            'tanggal' => 'required|date'
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('public/berita');
        }

        $validatedData['slug'] = Str::slug($request->judul);

        Berita::create($validatedData);
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit berita.
     *
     * @param  Berita $berita
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Memperbarui berita dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Berita $berita
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Berita $berita)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'image',
            'konten' => 'required|string',
            'tanggal' => 'required|date'
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('public/berita');
        }

        $validatedData['slug'] = Str::slug($request->judul);

        $berita->update($validatedData);
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Menghapus berita dari database.
     *
     * @param  Berita $berita
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus.');
    }
}
