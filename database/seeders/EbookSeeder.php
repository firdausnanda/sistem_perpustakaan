<?php

namespace Database\Seeders;

use App\Models\Ebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ebook::create([
            'id_kategori' => '1',
            'judul' => 'Ebook Keperawatan',
            'penulis' => 'nn',
            'abstrak' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sint, rerum possimus totam vitae mollitia iure, blanditiis quis eaque provident, aliquam aperiam ex unde fuga quasi voluptatibus eum maiores voluptatem?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sint, rerum possimus totam vitae mollitia iure, blanditiis quis eaque provident, aliquam aperiam ex unde fuga quasi voluptatibus eum maiores voluptatem?',
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
