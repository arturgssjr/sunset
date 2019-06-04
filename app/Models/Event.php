<?php

namespace Descolado\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'edition',
        'name',
        'description',
        'event_day',
        'subscribe_begin',
        'subscribe_end',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function subscribes()
    {
        return $this->belongsToMany(Subscribe::class, 'subscribe_events');
    }
}
