<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Tags\HasTags;

class Ebook extends Model
{
    use HasFactory, HasTags, LogsActivity;

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

    public function tapActivity(Activity $activity, string $eventName)
	{
		if ($activity->causer_id) {
			$activity->description = "{$activity->causer->name} {$eventName} on {$activity->subject->nama}";
		} else {
			$activity->description = "{$activity->subject->nama}";
		}
	}

	public function getActivitylogOptions(): LogOptions
	{
		return LogOptions::defaults()
			->logFillable(true)
			->logOnlyDirty(true)
			->logUnguarded();
	}

    public function counter()
    {
        return $this->belongsTo(Counter::class, 'id', 'model_id');
    }
}
