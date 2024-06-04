<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KalenderAkademik;
use Illuminate\Http\Request;

class Kalender_AkademikController extends Controller
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
     * Show the index page for Kalender Akademik.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kalender_akademik = KalenderAkademik::first();
        return view('admin.kalender_akademik.index', compact('kalender_akademik'));
    }

    /**
     * Update the Kalender Akademik data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'file_pdf' => 'mimes:pdf|max:2048', // Adjust file types and size as needed
        ]);

        // Find the KalenderAkademik instance or create a new one if not exists
        $kalender_akademik = KalenderAkademik::firstOrNew();

        // Update the attributes
        $kalender_akademik->judul = $request->judul;
        $kalender_akademik->konten = $request->konten;
        $kalender_akademik->tanggal = $request->tanggal;
        $kalender_akademik->keterangan = $request->keterangan;

        // Handle photo upload
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto'); // Adjust the storage path as needed
            $kalender_akademik->foto = $fotoPath;
        }

        // Handle PDF file upload
        if ($request->hasFile('file_pdf')) {
            $pdfPath = $request->file('file_pdf')->store('public/pdf'); // Adjust the storage path as needed
            $kalender_akademik->file_pdf = $pdfPath;
        }

        // Save the updated or new KalenderAkademik instance
        $kalender_akademik->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Data Kalender Akademik berhasil diperbarui');
    }
}
