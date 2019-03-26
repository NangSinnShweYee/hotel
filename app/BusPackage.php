<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusPackage extends Model
{
    //
    protected $fillable = [
        'name',
        'depature_time',
        'arrival_time',
        'places',
        'description'
      ];
      
}
