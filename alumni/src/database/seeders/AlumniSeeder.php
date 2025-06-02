<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnis')->insert([
            [
                'nama' => 'Aulia Amanda',
                'nim' => '2021101001',
                'prodi' => 'Informatika',
                'tahun_masuk' => 2021,
                'tahun_lulus' => 2025,
                'IPK' => 3.7,
                'email' => 'aulia@example.com',
                'no_hp' => '081234567890',
                'pekerjaan' => 'Software Developer',
                'instansi' => 'PT Teknologi Cerdas',
                'alamat' => 'Jl. Mawar No. 123, Bandung',
                // 'foto' => 'foto_alumni/aulia.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Radith Yafi',
                'nim' => '2021101002',
                'prodi' => 'Sistem Informasi',
                'tahun_masuk' => 2021,
                'tahun_lulus' => 2025,
                'IPK' => 4.0,
                'email' => 'radith@example.com',
                'no_hp' => '082112345678',
                'pekerjaan' => 'Data Analyst',
                'instansi' => 'Data Insight Co.',
                'alamat' => 'Jl. Anggrek No. 45, Jakarta',
                // 'foto' => 'foto_alumni/radith.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
