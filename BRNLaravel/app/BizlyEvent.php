<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BizlyEvent extends Model
{
    protected $fillable = [
        'name',
        'details',
        'image_url',
        'thumb_url',
        'date_from',
        'date_to',
        'venue_id',
        'event_type_id',
        'user_id',
    ];
}
