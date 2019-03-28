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
public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function dining()
    {
        return $this->hasOne(Dining::class,'id','dining_id');
    }
}
