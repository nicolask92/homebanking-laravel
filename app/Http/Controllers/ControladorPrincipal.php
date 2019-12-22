<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControladorPrincipal extends Controller
{
    
    public function inicio() {
        return view('index');
    }

}
