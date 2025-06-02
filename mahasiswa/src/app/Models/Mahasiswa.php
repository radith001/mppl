<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Nama tabel jika tidak sesuai konvensi Laravel
    protected $table = 'mahasiswas';

    // Kolom yang boleh diisi (fillable)
    protected $fillable = [
        'nama',
        'nim',
        'semester',
        'program_studi',
    ];
}
