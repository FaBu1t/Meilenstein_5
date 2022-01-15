<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{   
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function miniships(){
        return $this->hasMany(Miniship::class);
    }

}