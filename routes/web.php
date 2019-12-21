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

Route::get('/', 'ControladorPrincipal@inicio')->name('inicio');

Route::get('balance/{datos?}', 'ControladorPrincipal@balance')->name('balance');

Route::get('inversiones', 'Investment@inversiones')->name('inversiones');

Route::get('inversiones/comprar/{id?}', 'Investment@comprar')->name('inversiones.comprar');

Route::get('inversiones/vender/{id?}', 'Investment@vender')->name('inversiones.vender');

Route::get('pago_servicio','ControladorPrincipal@servicios_pago')->name('servicios_pago');

Auth::routes();

Route::get('/servicios', 'ServicesController@index')->name('servicios');

Route::post('servicios/pay', 'ServicesController@payService')->name('services.pay');

Route::post('inversiones/comprar/comprado', 'Investment@comprado')->name('inversiones.comprado');

Route::post('inversiones/comprar/vendido', 'Investment@vendido')->name('inversiones.vendido');