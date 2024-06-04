<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
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
        $tentang = Tentang::first();
        return view('admin.tentang.index', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tentang = Tentang::first();
        $data = $request->only(['sejarah', 'visi', 'misi', 'landasan', 'sasaran', 'makna']);

        $request->validate([
            'sejarah' => 'required|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'landasan' => 'nullable|string',
            'sasaran' => 'nullable|string',
            'makna' => 'required|string',
            'sejarah_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tujuan_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('sejarah_foto')) {
            if ($tentang && $tentang->sejarah_foto && Storage::exists($tentang->sejarah_foto)) {
                Storage::delete($tentang->sejarah_foto);
            }
            $data['sejarah_foto'] = $request->file('sejarah_foto')->store('public/tentang');
        }

        if ($request->hasFile('tujuan_foto')) {
            if ($tentang && $tentang->tujuan_foto && Storage::exists($tentang->tujuan_foto)) {
                Storage::delete($tentang->tujuan_foto);
            }
            $data['tujuan_foto'] = $request->file('tujuan_foto')->store('public/tentang');
        }

        if ($tentang) {
            $tentang->update($data);
        } else {
            Tentang::create($data);
        }

        return redirect()->route('admin.tentang')->with('success', 'Data berhasil diperbarui.');
    }

    public function visimisi()
    {
        $visimisi = Tentang::first();
        return view('admin.visimisi.index', compact('visimisi'));
    }




    public function updatevisimisi(Request $request)
    {
        $tentang = Tentang::first();
        $data = $request->only(['sejarah', 'visi', 'misi', 'landasan', 'sasaran', 'makna']);

        if ($request->hasFile('sejarah_foto')) {
            $data['sejarah_foto'] = $request->file('sejarah_foto')->store('public/tentang');
        }

        if ($request->hasFile('tujuan_foto')) {
            $data['tujuan_foto'] = $request->file('tujuan_foto')->store('public/tentang');
        }

        if ($tentang) {
            $tentang->update($data);
        } else {
            Tentang::create($data);
        }

        return redirect()->route('admin.visimisi')->with('success', 'Visi Misi berhasil diperbarui.');
    }

    public function tujuan()
    {
        $tujuan = Tentang::first();
        return view('admin.tujuan.index', compact('tujuan'));
    }

    public function updatetujuan(Request $request)
    {
        $tentang = Tentang::first();
        $data = $request->only(['sejarah', 'visi', 'misi', 'landasan', 'sasaran', 'makna']);

        if ($request->hasFile('sejarah_foto')) {
            $data['sejarah_foto'] = $request->file('sejarah_foto')->store('public/tentang');
        }

        if ($request->hasFile('tujuan_foto')) {
            $data['tujuan_foto'] = $request->file('tujuan_foto')->store('public/tentang');
        }

        if ($tentang) {
            $tentang->update($data);
        } else {
            Tentang::create($data);
        }

        return redirect()->route('admin.tujuan')->with('success', 'Tujuan berhasil diperbarui.');
    }
}
