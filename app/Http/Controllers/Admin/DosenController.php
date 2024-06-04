<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        $prodi_id = $request->input('prodi_id');

        $query = Dosen::query();

        if ($search) {
            $query->where('nama', 'LIKE', '%' . $search . '%');
        }

        if ($prodi_id) {
            $query->where('prodi_id', $prodi_id);
        }

        $dosen = $query->paginate(10);
        $prodi = Prodi::all(); // Fetch all the Prodi records

        // Check if any results were found
        if ($search && $dosen->isEmpty()) {
            // No results found, flash a message
            session()->flash('error', 'Nama tidak ditemukan.');
        }

        return view('admin.dosen.index', compact('dosen', 'prodi'));
    }


    public function create()
    {
        $prodi = Prodi::all();
        return view('admin.dosen.create', compact('prodi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
            'jabatan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // Maksimum 20 MB (20480 KB)
            'tentang' => 'nullable|string',
            'pendidikan' => 'nullable|string',
            'prestasi' => 'nullable|string',
            'publikasi' => 'nullable|string',
            'pengalaman_kerja' => 'nullable|string',
            'keahlian' => 'nullable|string',
            'pengabdian_masyarakat' => 'nullable|string',
            'media_sosial' => 'nullable|string',
            'nidn' => 'nullable|string|max:255', // Atur validasi untuk NIDN
        ]);

        // Tambahkan NIDN ke dalam array request untuk penyimpanan
        $data = $request->all();
        $data['nidn'] = $request->nidn;
        // Buat instance Dosen dengan data yang telah dimasukkan
        $dosen = new Dosen($data);

        $jabatan = $request->jabatan === 'Lainnya' ? $request->jabatan_lainnya : $request->jabatan;

        $dosen = new Dosen($request->all());
        $dosen->jabatan = $jabatan;

        // Isi nilai default jika bidang-bidang opsional tidak diisi
        $dosen->tentang = $request->tentang ?? 'Data belum diisi';
        $dosen->pendidikan = $request->pendidikan ?? 'Data belum diisi';
        $dosen->prestasi = $request->prestasi ?? 'Data belum diisi';
        $dosen->publikasi = $request->publikasi ?? 'Data belum diisi';
        $dosen->pengalaman_kerja = $request->pengalaman_kerja ?? 'Data belum diisi';
        $dosen->keahlian = $request->keahlian ?? 'Data belum diisi';
        $dosen->pengabdian_masyarakat = $request->pengabdian_masyarakat ?? 'Data belum diisi';
        $dosen->media_sosial = $request->media_sosial;
        $dosen->nidn = $request->nidn ?? 'Data belum diisi';

        if ($request->hasFile('gambar')) {
            $fotoPath = $request->file('gambar')->store('public/gambar');
            $dosen->gambar = $fotoPath;
        }

        $dosen->save();

        return redirect()->route('admin.dosen')->with('success', 'Dosen Berhasil Ditambahkan.');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        $prodi = Prodi::all();
        return view('admin.dosen.edit', compact('dosen', 'prodi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
            'jabatan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // Maksimum 20 MB (20480 KB)
            'tentang' => 'nullable|string',
            'pendidikan' => 'nullable|string',
            'prestasi' => 'nullable|string',
            'publikasi' => 'nullable|string',
            'pengalaman_kerja' => 'nullable|string',
            'keahlian' => 'nullable|string',
            'pengabdian_masyarakat' => 'nullable|string',
            'media_sosial' => 'nullable|string',
            'nidn' => 'nullable|string|max:255', // Atur validasi untuk NIDN
        ]);


        $dosen = Dosen::findOrFail($id);
        $dosen->fill($request->except(['gambar', 'jabatan_lainnya']));

        $jabatan = $request->jabatan === 'Lainnya' ? $request->jabatan_lainnya : $request->jabatan;
        $dosen->jabatan = $jabatan;

        // Isi nilai default jika bidang-bidang opsional tidak diisi
        $dosen->tentang = $request->tentang ?? 'Data belum diisi';
        $dosen->pendidikan = $request->pendidikan ?? 'Data belum diisi';
        $dosen->prestasi = $request->prestasi ?? 'Data belum diisi';
        $dosen->publikasi = $request->publikasi ?? 'Data belum diisi';
        $dosen->pengalaman_kerja = $request->pengalaman_kerja ?? 'Data belum diisi';
        $dosen->keahlian = $request->keahlian ?? 'Data belum diisi';
        $dosen->pengabdian_masyarakat = $request->pengabdian_masyarakat ?? 'Data belum diisi';
        $dosen->media_sosial = $request->media_sosial;
        $dosen->nidn = $request->nidn ?? 'Data belum diisi';

        if ($request->hasFile('gambar')) {
            if ($dosen->gambar) {
                Storage::delete($dosen->gambar);
            }

            $file = $request->file('gambar');
            $path = $file->store('public/gambar');
            $dosen->gambar = $path;
        }

        if ($request->has('hapus_gambar') && $request->input('hapus_gambar') == 'on') {
            if ($dosen->gambar) {
                Storage::delete($dosen->gambar);
                $dosen->gambar = null;
            }
        }

        $dosen->save();

        return redirect()->route('admin.dosen')->with('success', 'Data Dosen Berhasil Diperbarui.');
    }



    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        if ($dosen->gambar) {
            Storage::delete($dosen->gambar);
        }

        $dosen->delete();

        return redirect()->route('admin.dosen')->with('success', 'Dosen berhasil dihapus.');
    }
}
