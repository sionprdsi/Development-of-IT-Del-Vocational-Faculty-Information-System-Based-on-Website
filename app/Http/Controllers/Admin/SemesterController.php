<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
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
    public function index(Request $request)
    {
        // Mengambil semua prodi untuk dropdown filter
        $prodis = Prodi::all();

        // Mendapatkan ID prodi dari request, jika ada
        $selectedProdiId = $request->input('prodi_id');

        // Mengambil semester berdasarkan prodi yang dipilih atau semua semester jika tidak ada prodi yang dipilih
        $semestersQuery = Semester::with('prodi');

        if ($selectedProdiId) {
            $semestersQuery->where('prodi_id', $selectedProdiId);
        }

        $semesters = $semestersQuery->paginate(10);

        return view('admin.semester.index', compact('semesters', 'prodis', 'selectedProdiId'));
    }


    public function create()
    {
        $prodis = Prodi::all();
        return view('admin.semester.create', compact('prodis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
            'kode' => 'required|string|max:10',
            'matkul' => 'required|string|max:255',
            'sks' => 'required|integer',
            'teori' => 'required|integer',
            'praktikum' => 'required|integer'
        ]);

        $semester = new Semester();
        $semester->kode = $request->kode;
        $semester->matkul = $request->matkul;
        $semester->sks = $request->sks;
        $semester->teori = $request->teori;
        $semester->praktikum = $request->praktikum;
        $semester->prodi_id = $request->prodi_id;
        $semester->note = $request->note;
        $semester->save();

        return redirect()->route('admin.semester');
    }

    public function edit($id)
    {
        $prodis = Prodi::all();
        $semester = Semester::findOrFail($id);
        return view('admin.semester.edit', compact('semester', 'prodis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'note' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
            'kode' => 'required|string|max:10',
            'matkul' => 'required|string|max:255',
            'sks' => 'required|integer',
            'teori' => 'required|integer',
            'praktikum' => 'required|integer'
        ]);

        $semester = Semester::findOrFail($id);
        $semester->kode = $request->kode;
        $semester->matkul = $request->matkul;
        $semester->sks = $request->sks;
        $semester->teori = $request->teori;
        $semester->praktikum = $request->praktikum;
        $semester->prodi_id = $request->prodi_id;
        $semester->note = $request->note;
        $semester->save();

        return redirect()->route('admin.semester');
    }

    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();

        return redirect()->route('admin.semester');
    }
}
