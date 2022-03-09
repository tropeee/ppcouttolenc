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

//Auth::routes();

Route::get('/',function(){
    return redirect()->route('login');
});

// Route::get('plataforma', function () {
//     return view('customer.dashboard');
// })->name('home');

/*
 * Test
 */
Route::get('test','HomeController@home')->name('test');
Route::get('check','HomeController@check')->name('test');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('plataforma', 'HomeController@index')->name('home.plataforma');

/*
 * Auth
 
Route::get('login','LoginController@showLogin')->name('login');
Route::post('login','LoginController@login')->name('doLogin');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('plataforma','HomeController@index')->name('home');
 */

/*
* Servicios
*/
Route::get('aplicacion-grafica','Service\ServiceController@aplicaciones')->name('servicio.aplicaciones');
Route::post('aplicacion-grafica/crear','Service\ServiceController@storeAplicacion')->name('servicio.aplicaciones.new');
Route::get('publicitaria','Service\ServiceController@publicitaria')->name('servicio.publicitaria');
Route::post('publicitaria/crear','Service\ServiceController@storePublicitaria')->name('servicio.publicitaria.new');
Route::get('cobertura','Service\ServiceController@cobertura')->name('servicio.cobertura');
Route::post('cobertura/crear','Service\ServiceController@storeCobertura')->name('servicio.cobertura.new');
Route::get('publicacion','Service\ServiceController@publicacion')->name('servicio.publicacion');
Route::post('publicacion/crear','Service\ServiceController@storePublicacion')->name('servicio.publicacion.new');
Route::get('atencion','Service\ServiceController@atencion')->name('servicio.atencion');
Route::post('atencion/crear','Service\ServiceController@storeAtencion')->name('servicio.atencion.new');

Route::get('archivos/{hash}/{name?}', 'File\FileController@showByHash')->name('archivo.ver');

Route::get('exito', function () {
    return view('customer.exito');
})->name('customer.exito');

Route::group(['middleware'=>'auth'], function(){
    Route::get('detail/{id}', 'HomeController@mailDetail')->name('mail.detail');
    Route::post('respuestas', 'RespuestaController@store')->name('respuestas.user');
    Route::resource('solicitudes', 'SolicitudController',['only'=>['update']]);
    // Route::put('solicitudes/{solicitud}', 'SolicitudController@update')->name('solicitudes.update');
});