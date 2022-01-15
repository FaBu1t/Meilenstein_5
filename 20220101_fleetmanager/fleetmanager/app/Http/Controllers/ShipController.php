<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{   
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name','manufacturer_id','built','age','length','height','color','brt'];
    protected $validation = [
        'name' => 'required',
        'built' => 'numeric',
        'age' => 'numeric',
        'lenght' => 'numeric',
        'height' => 'numeric',
        //'color' => '',
        'brt' => 'required|numeric'
    ];
    //
}
