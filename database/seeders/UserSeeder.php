<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'is_active' => 1,
            'password' => Hash::make('password'),
        ]);
  
        $admin->assignRole('admin');
        
        // Mahasiswa
        $mahasiswa = User::create([
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'is_active' => 1,
            'password' => Hash::make('password'),
        ]);
  
        $mahasiswa->assignRole('mahasiswa');

        // Dosen
        $dosen = User::create([
            'name' => 'Dosen',
            'username' => 'dosen',
            'email' => 'dosen@gmail.com',
            'email_verified_at' => now(),
            'is_active' => 1,
            'password' => Hash::make('password'),
        ]);
  
        $dosen->assignRole('dosen');
    }
}
