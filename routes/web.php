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

Route::get('inversiones', 'ControladorPrincipal@inversiones')->name('inversiones');

//  Route::get('pago_servicios', 'ControladorPrincipal@servicios_a_pagar')->name('servicios');

Route::get('pago_servicio','ControladorPrincipal@servicios_pago')->name('servicios_pago');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/servicios', 'ServicesController@index')->name('servicios');

Route::post('servicios/pay', 'ServicesController@payService')->name('services.pay');

