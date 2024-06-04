<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'judul',
        'subjudul',
        'slug',
        'foto',
        'sejarah',
        'visi',
        'misi',
        'tujuan',
        'lulusan',
        'kurikulum',
        'teks_dosen',
    ];

    public function semester()
    {
        return $this->hasMany(Semester::class);
    }


    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
