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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->hasOne(Room::class,'id','room_id');
    }

}
