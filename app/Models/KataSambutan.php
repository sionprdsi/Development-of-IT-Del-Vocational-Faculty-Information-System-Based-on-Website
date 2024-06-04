<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KataSambutan extends Model
{
    use HasFactory;

    protected $table = 'kata_sambutan';

    protected $fillable = [
        'judul',
        'nama',
        'teks_kata_sambutan',
        'tanggal',
        'foto',
        'jabatan',
    ];
}
