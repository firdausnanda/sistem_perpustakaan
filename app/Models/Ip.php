<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Ip extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'ip';

    protected $fillable = [
        'ip',
        'keterangan',
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
}
