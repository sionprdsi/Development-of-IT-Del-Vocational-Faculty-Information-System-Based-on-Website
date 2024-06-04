<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi_id',
        'nama',
        'gambar',
        'tentang',
        'jabatan',
        'pendidikan',
        'prestasi',
        'publikasi',
        'nidn', // Tambahkan kolom nidn ke dalam fillable
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
