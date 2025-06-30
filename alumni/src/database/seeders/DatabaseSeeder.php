<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat permission dasar
        $permissions = ['view alumni', 'create alumni', 'edit alumni', 'delete alumni'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat role super_admin dan beri semua izin
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdminRole->syncPermissions(Permission::all());

        // Buat role mahasiswa dan hanya beri izin view
        $mahasiswaRole = Role::firstOrCreate(['name' => 'mahasiswa']);
        $mahasiswaRole->syncPermissions(['view alumni']);

        // Buat user super admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'), // kamu bisa ganti dengan password yang lebih aman
            ]
        );
        $admin->assignRole('super_admin');

        // Buat user mahasiswa jika belum ada
        $mahasiswa = User::firstOrCreate(
            ['email' => 'alumni@email.com'],
            [
                'name' => 'alumni',
                'password' => Hash::make('alumni'),
            ]
        );
        $mahasiswa->assignRole('alumni');

        $this->call(AlumniSeeder::class);
    }
}
