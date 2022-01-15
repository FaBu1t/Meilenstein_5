<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinishipController extends Controller
{
    protected $className = 'App\Models\Miniship';
    protected $entityName = 'miniships';
    protected $fields = ['name','ship_id','scale'];
    protected $validation = [
        'name' => 'required',
        'scale' => ''
    ];
}
