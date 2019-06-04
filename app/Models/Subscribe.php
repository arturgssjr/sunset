<?php

namespace Descolado\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscribe extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'subscribe_events');
    }
}
