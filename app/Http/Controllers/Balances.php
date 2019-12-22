<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class Balances extends Controller
{
    public function balance($datos = null) {
        $saldo = App\Saldo::all();
        $balance = App\Balance::all();
        
            return view('balance',compact('balance','saldo'));

    }

}
