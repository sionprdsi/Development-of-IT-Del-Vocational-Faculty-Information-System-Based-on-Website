<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi_id',
        'note',
        'kode',
        'matkul',
        'sks',
        'teori',
        'praktikum',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
