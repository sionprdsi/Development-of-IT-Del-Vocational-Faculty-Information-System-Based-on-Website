<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KataSambutan;
use Illuminate\Http\Request;

class SambutanDekanController extends Controller
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
        $sambutan_dekan = KataSambutan::first();
        return view('admin.sambutan_dekan.index', compact('sambutan_dekan'));
    }

    public function update(Request $request)
    {
        $sambutan_dekan = KataSambutan::first();

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'nullable|string|max:255',
            'teks_kata_sambutan' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jabatan' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('public/sambutan_dekan');
        }

        if ($sambutan_dekan) {
            $sambutan_dekan->update($validatedData);
        } else {
            KataSambutan::create($validatedData);
        }

        return redirect()->route('admin.sambutan_dekan')->with('success', 'Kata sambutan berhasil diperbarui.');
    }
}
