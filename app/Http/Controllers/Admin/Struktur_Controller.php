<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganisationalStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Struktur_Controller extends Controller
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
     * Show the index page for Struktur Organisasi.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $struktur_organisasi = OrganisationalStructure::first();
        return view('admin.struktur_organisasi.index', compact('struktur_organisasi'));
    }

    /**
     * Update the Struktur Organisasi data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama_struktur_organisasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the OrganisationalStructure instance or create a new one if not exists
        $struktur_organisasi = OrganisationalStructure::firstOrNew();

        // Update the attributes
        $struktur_organisasi->nama_struktur_organisasi = $request->input('nama_struktur_organisasi');

        // Handle photo upload
        if ($request->hasFile('gambar')) {
            // Delete the old image if exists
            if ($struktur_organisasi->gambar) {
                Storage::delete($struktur_organisasi->gambar);
            }
            // Store the new image
            $gambarPath = $request->file('gambar')->store('public/foto_struktur_organisasi');
            $struktur_organisasi->gambar = str_replace('public/', '', $gambarPath);
        }

        // Save the updated or new OrganisationalStructure instance
        $struktur_organisasi->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Data Struktur Organisasi berhasil diperbarui');
    }
}
