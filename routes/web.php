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
})->middleware('auth');

Route::group(['prefix'=>'login'],function(){
    Route::get('', 'loginController@index')->name('login');
    Route::post('/log', 'loginController@login');
    Route::get('/logout','LoginController@logout');
});

Route::group(['prefix'=>'usuario', 'middleware' => 'auth'],function(){
    Route::get('/crear', 'UsuariosController@crear');
    Route::post('/crear', 'UsuariosController@store');
});

Route::group(['prefix'=>'tipo', 'middleware' => 'auth'],function(){
    Route::get('/', 'TipoController@index');
    Route::get('/crear', 'TipoController@crear');
    Route::post('/crear', 'TipoController@store');
    Route::get('/ver', 'TipoController@ver');
    Route::delete('/borrar/{id}', 'TipoController@delete');
    Route::get('/editar/{id}', 'TipoController@editar');
    Route::put('/editar/{id}', 'TipoController@edit');
});


Route::group(['prefix'=>'solicitud', 'middleware' => 'auth'],function(){
    Route::get('/', 'SolicitudController@index');
    Route::get('/crear', 'SolicitudController@crear');
    Route::post('/crear', 'SolicitudController@store');
    Route::get('/ver', 'SolicitudController@ver');
    Route::delete('/borrar/{id}', 'SolicitudController@delete');
    Route::get('/editar/{id}', 'SolicitudController@editar');
    Route::put('/editar/{id}', 'SolicitudController@edit');
});