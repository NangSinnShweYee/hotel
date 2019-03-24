<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_number',
        'photo',
        'description',
        'price',
        'availability',
        'bedcount',
        'category_id',

    ];
    public function room_categories()
    {
        return $this->belongsTo(RoomCategory::class,'category_id');
    }
}


