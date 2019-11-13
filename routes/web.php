<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mi-balance', function () {
    return view('balance');
});
Route::get('home', function () {
    return view('index');
});

Route::get('inversiones', function () {
    return view('inversiones');
});
Route::get('pago-servicio', function () {
    return view('pago_servicios');
});
Route::get('servicio-pago', function () {
    return view('pago_servicio');
});



Route::get('/servicios', function () {
    return response()->json(array(
        'Agua' => 'Pagado',
        'Luz' => 'Pagado',
        'Cable' => 'Pagado'
    ));
});

Route::post('/servicios', function () {
    return "Servicio Creado";
});
Route::delete('/servicios', function () {
    return "Servicio Eliminado";
});