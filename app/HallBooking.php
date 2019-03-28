<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HallBooking extends Model
{
    //
     protected $fillable = [
        'hall_id',
        'user_id',
        'start_time',
        'end_time',
 ];
public function user()
    {
        return $this->hasOne(User::class);
    }

    public function hall()
    {
        return $this->hasOne(Hall::class,'id','hall_id');
    }
}