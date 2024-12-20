<?php

namespace Database\Seeders;

use App\Models\Jurnal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurnal::create([
            'id_kategori' => '1',
            'judul' => 'Ebook Keperawatan',
            'penulis' => 'nn',
            'abstrak' => '',
            'keterangan' => '',
            'tahun' => '2023',
            'total_halaman' => '100',
            'link' => '',
            'gambar' => '',
            'subject' => '',
            'akses' => 1,
        ]);
    }
}
