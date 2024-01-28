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
        Ebook::truncate();

        $json = file_get_contents(public_path('json/ebook.json'));
        $ebook = json_decode($json, true);

        foreach ($ebook as $w) {
            Ebook::create([
                'id_kategori' => $w['id_kategori'],
                'judul' => $w['judul'],
                'penulis' => $w['judul'],
                'abstrak' => $w['abstrak'],
                'keterangan' => $w['keterangan'],
                'tahun' => $w['tahun'],
                'total_halaman' => $w['total_halaman'],
                'link' => $w['link'],
                'gambar' => $w['gambar'],
                'subject' => $w['subject'],
                'akses' => $w['akses'],
            ]);
        }
    }
}
