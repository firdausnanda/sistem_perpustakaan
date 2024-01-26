<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebook';

    protected $fillable = [
        'id_kategori',
        'judul',
        'penulis',
        'abstrak',
        'keterangan',
        'tahun',
        'total_halaman',
        'link',
        'gambar',
        'subject',
        'file',
        'akses',
    ];
}
