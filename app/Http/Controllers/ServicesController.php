<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ServicesController extends Controller
{
    public function index() {


        $servicios_pagos = App\Services::all();

        return view ('pago_servicios',compact('servicios_pagos'));

    }

    public function payService(Request $request) {
        $service = $request->get('service');
        $money = $request->get('money');
        $referencia = $request->get('referencia');

        //$response = "El servicio pago es $service, con un valor de $money y su numero de referencia es $referencia";
        
        $response = view('pago_servicio',compact('service','money','referencia'))->render();



        return response()->json(array('success'=>true, 'view'=>$response));
    }

}
