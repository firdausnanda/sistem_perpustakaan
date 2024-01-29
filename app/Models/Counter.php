<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $table = "counter";
    protected $fillable = [
        'model',
        'model_id',
        'download',
        'lihat',
    ];
}
