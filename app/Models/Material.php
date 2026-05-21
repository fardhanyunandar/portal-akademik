<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'schedule_id',
        'lecturer_id',
        'title',
        'description',
        'file_path',
        'file_name',
        'meeting_number',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
}