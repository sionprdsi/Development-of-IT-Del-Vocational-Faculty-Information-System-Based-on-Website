<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $fillable = [
        'sejarah',
        'sejarah_foto',
        'visi',
        'misi',
        'tujuan_foto',
        'landasan',
        'sasaran',
        'makna'
    ];
}
