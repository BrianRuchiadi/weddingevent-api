<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTable extends Model {
    public $table = 't0202_event_table';
    protected $fillable = [
        'event_id',
        'capacity',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
