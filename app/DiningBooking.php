<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiningBooking extends Model
{
    //
    //
     protected $fillable = [
    'dining_id',
        'user_id',
        'date'
    
 ];
public function users()
    {
        return $this->hasOne(User::class,'id');
    }

    public function dinings()
    {
        return $this->hasOne(Dining::class,'id');
    }
}
