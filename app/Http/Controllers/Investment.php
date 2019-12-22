<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Validator;

class Investment extends Controller
{
    public function inversiones() {

        $saldo = App\Saldo::all();

        $inversiones = App\Investment::all();

        return view('inversiones',compact('inversiones','saldo'));
    }

    public function comprar($id = null) {
        if($id != null) {
        $invertir = App\Investment::findOrFail($id);
        }
        else {
            $invertir = 0;
        }
        $valor_compra;

        return view('inversiones.comprar',compact('invertir'));
    }

    public function comprado(Request $request) {
                // Valido la variable pasada
        $validator = Validator::make($request->all(), [
            'acciones' => 'required|integer|min:1',
            'id' => 'required'
        ]);

            if ($validator->passes()) {
                        // Accedo a la BD para futuras interacciones
                    $id_acciones_de_esta_empresa = $request->get('id');
                    $comprar_acciones = App\Investment::findOrFail($id_acciones_de_esta_empresa);
                    $valor_de_accion_a_comprar = $comprar_acciones->val_accion;
                    $cantidad_de_acciones = $comprar_acciones->total_accion;

                    $saldo = App\Saldo::all();
                    $ult_saldo =  $saldo->last()->saldo;

                        // Defino las variables pasadas al controlador
                    
                    $accion = $request->get('acciones');
                    $acciones_a_comprar = $accion*$valor_de_accion_a_comprar;

                    if($acciones_a_comprar<$ult_saldo) {
                            //Se puede comprar ya que alcanza el saldo para la compra de acciones
                        $nuevo_saldo = new App\Saldo;
                        $nuevo_saldo->saldo = $ult_saldo - $acciones_a_comprar;
                        $nuevo_saldo->save();

                        $comprar_acciones->total_accion = $cantidad_de_acciones + $accion;
                        $comprar_acciones->save();

                        $empresa = $comprar_acciones->empresa;
                        $saldo = App\Saldo::all();

                        $response = view('inversiones/comprado',compact('empresa','acciones_a_comprar','accion','saldo'))->render();
                    
                        
                        return response()->json(array('success'=>true, 'view'=>$response));
                    }

                    else {

                        $error = "Saldo Insuficiente";

                        $response = view('inversiones/comprado',compact('error'))->render();
                    
                        return response()->json(array('success'=>true, 'view'=>$response));

                    }
                }

            else {

                $error = "Ingrese los datos solicitados";

                $response = view('inversiones/comprado',compact('error'))->render();
            
                return response()->json(array('success'=>true, 'view'=>$response));
            }
    }

    public function vender($id = null) {
        if($id != null) {
        $invertir = App\Investment::findOrFail($id);
        }
        else {
            $invertir = 0;
        }

        return view('inversiones.vender',compact('invertir'));
    }


    public function vendido(Request $request) {
        // Valido la variable pasada
$validator = Validator::make($request->all(), [
    'acciones' => 'required|integer|min:1',
    'id' => 'required'
]);

    if ($validator->passes()) {
                // Accedo a la BD para futuras interacciones
            $id_acciones_de_esta_empresa = $request->get('id');
            $comprar_acciones = App\Investment::findOrFail($id_acciones_de_esta_empresa);
            $valor_de_accion_a_vender = $comprar_acciones->val_accion;

            $cantidad_de_acciones = $comprar_acciones->total_accion;

            $saldo = App\Saldo::all();
            $ult_saldo =  $saldo->last()->saldo;

                // Defino las variables pasadas al controlador
            
            $accion = $request->get('acciones');
            

            if($accion<=$cantidad_de_acciones) {
                    //Se puede vender ya que la cantidad de acciones es correcta

                $acciones_a_vender = $accion*$valor_de_accion_a_vender;

                $nuevo_saldo = new App\Saldo;
                $nuevo_saldo->saldo = $ult_saldo + $acciones_a_vender;

                $comprar_acciones->total_accion = $cantidad_de_acciones - $accion;
                $comprar_acciones->save();
                $nuevo_saldo->save();
                $saldo = App\Saldo::all();
                $empresa = $comprar_acciones->empresa;
                

                $response = view('inversiones/vendido',compact('empresa','acciones_a_vender','accion','saldo'))->render();
            
                
                return response()->json(array('success'=>true, 'view'=>$response));
            }

            else {

                $error = "Superaste las acciones que contas";

                $response = view('inversiones/vendido',compact('error'))->render();
            
                return response()->json(array('success'=>true, 'view'=>$response));

            }
        }

    else {

        $error = "Ingrese los datos solicitados";

        $response = view('inversiones/vendido',compact('error'))->render();
    
        return response()->json(array('success'=>true, 'view'=>$response));
    }
}

}
