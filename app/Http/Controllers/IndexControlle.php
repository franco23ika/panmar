<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexControlle extends Controller
{
    public function index(){
        return view('inicio');
    }
}
