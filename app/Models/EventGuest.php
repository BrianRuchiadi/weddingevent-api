<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventGuest extends Model {
    public $table = 't0203_event_guest';
    protected $fillable = [
        'event_id',
        'event_table_id',
        'attendance', // attending, not-attending, undecided
        'redpacket'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
