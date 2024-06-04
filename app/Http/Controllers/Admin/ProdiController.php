<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator; // Tambahkan use statement ini di atas class


class ProdiController extends Controller
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
     * Menampilkan daftar program studi.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('admin.prodi.index', compact('prodi'));
    }

    /**
     * Menampilkan form untuk membuat program studi baru.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.prodi.create');
    }

    /**
     * Menyimpan program studi baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'lulusan' => 'nullable|string',
            'kurikulum' => 'nullable|string',
            'teks_dosen' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slug = Str::slug($request->nama);
        $foto = null;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/prodi', $image->hashName());
            $foto = $image->hashName();
        }

        Prodi::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'slug' => $slug,
            'foto' => $foto,
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'lulusan' => $request->lulusan,
            'kurikulum' => $request->kurikulum,
            'teks_dosen' => $request->teks_dosen,
        ]);

        return redirect()->route('admin.prodi')->with('success', 'Program studi berhasil ditambahkan.');
    }
    /**
     * Menampilkan form untuk mengedit program studi.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('admin.prodi.edit', compact('prodi'));
    }

    /**
     * Memperbarui program studi di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'foto' => 'nullable|image',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'lulusan' => 'nullable|string',
            'kurikulum' => 'nullable|string',
            'teks_dosen' => 'nullable|string',
        ]);

        $slug = Str::slug($request->nama);

        $prodi = Prodi::findOrFail($id);

        $slug = Str::slug($request->nama);
        $foto = null;
        if ($request->hasFile('foto')) {

            $image = $request->file('foto');
            $image->storeAs('public/prodi', $image->hashName());
            $foto =  $image->hashName();

            $prodi->update([
                'nama' => $request->nama,
                'judul' => $request->judul,
                'slug' => $slug,
                'foto' => $foto,
                'sejarah' => $request->sejarah,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tujuan' => $request->tujuan,
                'lulusan' => $request->lulusan,
                'kurikulum' => $request->kurikulum,
                'teks_dosen' => $request->teks_dosen,
            ]);
        } else {

            $prodi->update([
                'nama' => $request->nama,
                'judul' => $request->judul,
                'slug' => $slug,
                'sejarah' => $request->sejarah,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tujuan' => $request->tujuan,
                'lulusan' => $request->lulusan,
                'kurikulum' => $request->kurikulum,
                'teks_dosen' => $request->teks_dosen,
            ]);
        }

        return redirect()->route('admin.prodi')->with('success', 'Program studi berhasil diperbarui.');
    }

    /**
     * Menghapus program studi dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('admin.prodi')->with('success', 'Program studi berhasil dihapus.');
    }
}
