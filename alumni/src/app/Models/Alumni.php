<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumni extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika mengikuti konvensi Laravel)
    protected $table = 'alumnis';

    // Kolom yang boleh diisi (fillable)
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'tahun_masuk',
        'tahun_lulus',
        'IPK',
        'email',
        'no_hp',
        'pekerjaan',
        'instansi',
        'alamat',
        'image',
    ];
}
