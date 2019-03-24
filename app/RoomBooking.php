<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    //
    protected $fillable = [
        'room_id',
        'user_id',
        'check_in',
        'check_out',        

    ];
}
