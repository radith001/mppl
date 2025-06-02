<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Aulia Amanda',
                'nim' => '221234567',
                'semester' => 4,
                'program_studi' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Radith Yafi Valerian',
                'nim' => '221234568',
                'semester' => 4,
                'program_studi' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '221234569',
                'semester' => 2,
                'program_studi' => 'Teknik Sipil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
