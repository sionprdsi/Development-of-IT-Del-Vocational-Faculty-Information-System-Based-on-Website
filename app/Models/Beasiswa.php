<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswa';

    protected $fillable = [
        'id', // tambahkan 'id' ke dalam $fillable
        'foto_beasiswa',
        'judul_beasiswa',
        'jenis_beasiswa',
        'deskripsi_beasiswa',
    ];

    public $incrementing = false; // menonaktifkan auto-increment

    protected $keyType = 'string'; // mendefinisikan tipe kunci
}
