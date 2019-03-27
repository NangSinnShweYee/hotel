<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dining extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'photo',
        'capacity',     
        'description',        

    ];
    
}
