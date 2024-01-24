<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        Role::create([
            'name' => 'admin',
        ]);
        
        // Mahasiswa
        Role::create([
            'name' => 'mahasiswa',
        ]);

        // Dosen
        Role::create([
            'name' => 'dosen',
        ]);
  
    }
}
