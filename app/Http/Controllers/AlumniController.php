<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Alumni;
use App\Models\Profil;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();
        $profil = Profil::first();
        $alumni = Alumni::all();
        return view('alumni', compact('alumni', 'prodi', 'profil'));
    }
}
