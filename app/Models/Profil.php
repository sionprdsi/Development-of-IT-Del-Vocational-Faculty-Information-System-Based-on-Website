<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kode_pos',
        'telepon',
        'email',
        'karir',
        'logo',
        'video',
        'peta',
        'kenapa_vokasi',
        'facebook',
        'twitter',
        'youtube',
        'instagram',
    ];
}
