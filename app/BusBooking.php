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
public function users()
    {
        return $this->hasOne(User::class,'id');
    }

    public function bus_packages()
    {
        return $this->hasOne(BusPackage::class,'id');
    }
}
