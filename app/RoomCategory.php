<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
class RoomCategory extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function rooms($value='')
    {
    	# code...
    	 return $this->hasMany(Room::class,'category_id');
    }
}
