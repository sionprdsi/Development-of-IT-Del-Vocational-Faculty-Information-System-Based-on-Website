<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prodi;
use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Alumni_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alumni = Alumni::paginate(10); // Menampilkan 10 data per halaman
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('admin.alumni.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // Maksimum 20 MB (20480 KB)
            'work_at' => 'required|string|max:255',
            'graduation_year' => 'required|integer|digits:4|min:2001|max:' . (date('Y') + 1),
            'testimonial' => 'required|string',
        ]);

        $alumni = new Alumni;
        $alumni->name = $request->name;
        $alumni->work_at = $request->work_at;
        $alumni->graduation_year = $request->graduation_year;
        $alumni->testimonial = $request->testimonial;

        if ($request->hasFile('image')) {
            $fotoPath = $request->file('image')->store('public/image');
            $alumni->image = $fotoPath;
        }

        $alumni->save();

        return redirect()->route('admin.alumni')->with('success', 'Alumni Berhasil Ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // Maksimum 20 MB (20480 KB)
            'work_at' => 'required|string|max:255',
            'graduation_year' => 'required|integer|digits:4|min:1900|max:' . (date('Y') + 1),
            'testimonial' => 'required|string',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->name = $request->name;
        $alumni->work_at = $request->work_at;
        $alumni->graduation_year = $request->graduation_year;
        $alumni->testimonial = $request->testimonial;

        if ($request->hasFile('image')) {
            if ($alumni->image) {
                Storage::delete($alumni->image);
            }
            $fotoPath = $request->file('image')->store('public/image');
            $alumni->image = $fotoPath;
        }

        $alumni->save();

        return redirect()->route('admin.alumni')->with('success', 'Alumni Berhasil Diperbarui.');
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->image) {
            Storage::delete($alumni->image);
        }

        $alumni->delete();

        return redirect()->route('admin.alumni')->with('success', 'Dosen berhasil dihapus.');
    }
}
