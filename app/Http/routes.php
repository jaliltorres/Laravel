<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro_egresado', function () {
    return view('registro_egresado');
});

Route::get('/registro_empresa', function () {
    return view('registro_empresa');
});

Route::get('registro_egresado', 'EgresadoController@create');

Route::post('registro_egresado', 'EgresadoController@store');

Route::get('mostrar', 'EgresadoController@show');

Route::get('registro_egresado', 'EgresadoController@mes');

Route::get('registro_empresa', 'EmpresaController@create');
Route::post('registro_empresa', 'EmpresaController@store');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
