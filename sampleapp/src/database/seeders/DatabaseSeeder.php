<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Buat akun admin
    $user = User::factory()->create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password'),
    ]);

    // Role & Permission
    $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
    $mahasiswaRole = Role::firstOrCreate(['name' => 'mahasiswa']);

    $permissions = ['read mahasiswa'];
    foreach ($permissions as $perm) {
        Permission::firstOrCreate(['name' => $perm]);
    }

    // Assign permission ke role mahasiswa
    $mahasiswaRole->syncPermissions(['read mahasiswa']);

    // Assign role super_admin ke admin
    $user->assignRole('super_admin');

    // Jalankan seeder lainnya
    $this->call([
        MahasiswaSeeder::class,
    ]);

    // Buat akun mahasiswa
    $mahasiswaUser = User::factory()->create([
        'name' => 'Mahasiswa',
        'email' => 'mhs@mahasiswa.com',
        'password' => bcrypt('mhs123'),
    ]);

    // Assign role mahasiswa
    $mahasiswaUser->assignRole('mahasiswa');
}

}
