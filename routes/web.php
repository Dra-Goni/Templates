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
});

Route::group(['prefix'=>'usuario', 'middleware' => 'auth'],function(){
    Route::get('/crear', 'UsuariosController@crear');
    Route::post('/crear', 'UsuariosController@store');
});