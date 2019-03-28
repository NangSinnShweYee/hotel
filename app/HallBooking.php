<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HallBooking extends Model
{
    //
     protected $fillable = [
    'bus_id',
        'user_id',
        'start_time',
        'end_time',
 ];
public function users()
    {
        return $this->hasOne(User::class,'id');
    }

    public function halls()
    {
        return $this->hasOne(Hall::class,'id');
    }
}