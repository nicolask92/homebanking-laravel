<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControladorPrincipal extends Controller
{

    
    
    public function inicio() {
        return view('index');
    }

    public function servicios_a_pagar() {
        return view('pago_servicios');
    }

    public function balance($datos = null) {
        $saldo = App\Saldo::all();

        if(!$datos) {
            $monto = array('5000','-400','4000');
            $descripcion = array('Transaccion Entrante','Transaccion Saliente','Salario');
            $fecha = array('11/11/2019','8/09/2019','2/10/2019');

            $saldos = array();
            //  $subsaldo = ;

            $saldos_aux = 0;

            for ($i=0;$i<count($monto);$i++) {
                $saldos_aux = $monto[$i]+$saldos_aux;
                array_push($saldos, $saldos_aux);
            }

            //$saldos = [$monto[0],$monto[1]-$monto[0],$subsaldo];

            return view('balance',compact('monto','descripcion','fecha','saldos','saldo'));
        }
        else {
            return view('balance');
        }




    }


}
