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
    public function users()
    {
        return $this->hasOne(User::class,'id');
    }

    public function rooms()
    {
        return $this->hasOne(Room::class,'id');
    }

}
