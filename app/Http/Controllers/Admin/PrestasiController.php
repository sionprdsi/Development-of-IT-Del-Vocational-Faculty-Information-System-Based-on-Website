<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Menampilkan halaman daftar prestasi.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Prestasi::query();

        // Filter berdasarkan tahun
        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }

        // Cari berdasarkan nama
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $prestasi = $query->orderBy('tahun', 'desc')->paginate(25);

        return view('admin.prestasi.index', compact('prestasi'));
    }


    /**
     * Menampilkan form untuk membuat prestasi baru.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.prestasi.create');
    }

    /**
     * Menyimpan prestasi baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'juara' => 'required|string',
            'nama_prestasi' => 'required|string',
            'tingkat' => 'required|string',
            'tahun' => 'required|numeric',
        ]);

        Prestasi::create($validatedData);
        return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit prestasi.
     *
     * @param  Prestasi $prestasi
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Memperbarui prestasi dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Prestasi $prestasi
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'juara' => 'required|string',
            'nama_prestasi' => 'required|string',
            'tingkat' => 'required|string',
            'tahun' => 'required|numeric',
        ]);

        $prestasi->update($validatedData);
        return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil diperbarui.');
    }

    /**
     * Menghapus prestasi dari database.
     *
     * @param  Prestasi $prestasi
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil dihapus.');
    }
}
