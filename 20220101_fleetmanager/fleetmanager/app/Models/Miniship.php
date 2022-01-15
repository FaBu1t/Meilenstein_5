<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Miniship extends Model
{
    public function parentShip(){
        return $this->belongsTo(Ship::class);
    }
}
