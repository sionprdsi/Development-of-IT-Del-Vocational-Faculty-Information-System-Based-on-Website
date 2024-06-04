<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisationalStructure extends Model
{
    use HasFactory;

    protected $table = 'organisational_structures';

    protected $fillable = [
        'nama_struktur_organisasi',
        'gambar',
    ];
}
