<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
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
        $galleries = Galeri::all();
        $galleries = Galeri::paginate(5); // Menampilkan 5 item per halaman

        return view('admin.galeri.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate that at least one file is uploaded
        $request->validate([
            'files' => 'required',
            'files.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'files.required' => 'Anda harus mengupload setidaknya satu foto.',
            'files.*.image' => 'Semua file harus berupa gambar.',
            'files.*.mimes' => 'Gambar harus dalam format jpeg, png, jpg, gif, atau svg.',
            'files.*.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.'
        ]);

        $files = $request->file('files');

        if ($files) {
            foreach ($files as $file) {
                $path = $file->store('public/galeri');

                Galeri::create([
                    'foto' => $path
                ]);
            }
        }

        // Flash message for success
        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        try {
            $galeri->delete();
            return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.galeri')->with('error', 'Gagal menghapus galeri.');
        }
    }
}
