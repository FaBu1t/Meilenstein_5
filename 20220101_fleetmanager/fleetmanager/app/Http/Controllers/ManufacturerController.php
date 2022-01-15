<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    protected $className = 'App\Models\Manufacturer';
    protected $entityName = 'manufacturers';
    protected $fields = ['name','rating'];
    protected $validation = [
        'name' => 'required',
        'rating' => 'numeric'
    ];
}
