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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Auth::routes();

Route::get('/','InicioController@home')->name('inicio');
Route::get('blog','BlogController@list')->name('blog');
Route::get('proyectos','ProjectController@list')->name('proyectos');
Route::get('decalogo','InicioController@decalogo')->name('decalogo');
Route::get('blog/{slug}', 'BlogController@single')->name('blog.item');
Route::get('proyecto/{slug}', 'ProjectController@single')->name('proyecto.item');
Route::get('atencion','InicioController@atencion')->name('atencion');
Route::post('guardar','InicioController@storeAtencion')->name('atencion.new');
Route::post('atencion/buscar','InicioController@buscarAtencion')->name('atencion.buscar');
Route::get('afiliacion','InicioController@afiliacion')->name('afiliacion');
Route::get('exito/{id}','InicioController@gracias')->name('exito');
Route::get('contacto','InicioController@contact')->name('contacto');
Route::get('primer-informe','InicioController@informe1')->name('informe1');

Route::resource('respuestas', 'RespuestaController',['only'=>['store']]);
Route::get('archivos/{hash}/{name?}', 'File\FileController@showByHash')->name('archivo.ver');

Route::group(['prefix' => 'primer-informe'], function () {
    Route::view('trabajo','app.transparencia.informe1.trabajos')->name('trabajos');
    Route::view('logros','app.transparencia.informe1.logros')->name('logros');
    Route::view('cerca-de-ti','app.transparencia.informe1.cerca')->name('cerca');
    Route::view('futuro-verde','app.transparencia.informe1.futuro')->name('futuro');
});
//Route::get('/home', 'HomeController@index')->name('home');
