<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    public $table = 't0201_event';
    protected $fillable = [
        'name',
        'event_start',
        'event_end',
        'redpacket_on'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
