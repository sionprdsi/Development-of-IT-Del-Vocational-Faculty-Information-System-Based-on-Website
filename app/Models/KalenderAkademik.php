<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{
    use HasFactory;

    protected $table = 'kalender_akademik'; // Sesuaikan dengan nama tabel yang sebenarnya di database

    protected $fillable = [
        'judul',
        'konten',
        'tanggal',
        'keterangan',
        'foto',
        'file_pdf',
    ];
}
