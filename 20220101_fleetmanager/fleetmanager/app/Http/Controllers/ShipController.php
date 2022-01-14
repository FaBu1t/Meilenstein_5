<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{   
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name','age','length','height','brt'];
    protected $validation = [
        'name' => 'required',
        'age' => 'numeric',
        'lenght' => 'numeric',
        'height' => 'numeric',
        'brt' => 'required|numeric'
    ];
    //
}
