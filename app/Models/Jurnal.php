<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Jurnal extends Model
{
    use HasFactory, HasTags;

    protected $table = 'jurnal';

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
