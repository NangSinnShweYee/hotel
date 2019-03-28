<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusBooking extends Model
{
    //
    protected $fillable = [
    'bus_id',
        'user_id',
        'date'
 ];
public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function bus_package()
    {
        return $this->hasOne(BusPackage::class,'id','bus_id');
    }
}
