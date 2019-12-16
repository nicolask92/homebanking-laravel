<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return view ('pago_servicios');
    }

    public function payService(Request $request) {
        $service = $request->get('service');
        $money = $request->get('money');
        $referencia = $request->get('referencia');

        //$response = "El servicio pago es $service, con un valor de $money y su numero de referencia es $referencia";
        
        $response = view('pago_servicio',compact('service','money','referencia'))->render();

        return response()->json(array('success'=>true, 'view'=>$response));
    }

    public function consulta(Request $request) {
        $name = $request->get('Nombre');
        $names = laravel::table('usuarios')->where("Nombre",$name)->get();

        $response = view('consultado',compact('names'))->render();

        return response()->json(array('success'=>true, 'view'=>$response));
        
    }

}
