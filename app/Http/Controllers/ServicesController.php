<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Validator;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index() {


        $servicios_pagos = App\Services::paginate(5);
        $saldo = App\Saldo::all();

        return view ('pago_servicios',compact('servicios_pagos','saldo'));

    }

    public function payService(Request $request) {


        $validator = Validator::make($request->all(), [
            'service' => 'required',
            'money' => 'required|integer|min:1',
            'referencia' => 'required'
        ]);
        if ($validator->passes()) {
        $servicio_nuevo = new App\Services;
                //Guardando Variables
        $service = $request->get('service');
        $money = $request->get('money');
        $referencia = $request->get('referencia');
                //Llamando a la BD
            $saldo = App\Saldo::all();
            $ult_saldo =  $saldo->last()->saldo;


                if($money<$ult_saldo){
                        $servicio_nuevo->confirmed = true;
                        $servicio_nuevo->reference_number = $referencia;
                        $servicio_nuevo->servicio = $service;
                        $servicio_nuevo->importe = $money;
                        
                        $servicio_nuevo->save();

                        $nuevo_saldo = new App\Saldo;
                        $nuevo_saldo->saldo = $ult_saldo - $money;
                        $nuevo_saldo->save();
                        
                    
                        $response = view('pago_servicio',compact('service','money','referencia','nuevo_saldo'))->render();
                            
                        return response()->json(array('success'=>true, 'view'=>$response));
                }
                else {
                    $error = "No tienes Dinero suficiente en la cuenta para efectuar el pago del servicio.";

                    $response = view('pago_servicio',compact('error'))->render();
           
                    return response()->json(array('success'=>true, 'view'=>$response));
                }
        }
        else {

            $error = "Ingrese todo los datos";

            $response = view('pago_servicio',compact('error'))->render();
           
            return response()->json(array('success'=>true, 'view'=>$response));
        }

    }

}
