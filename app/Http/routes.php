<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|   post,get,put,delete
*/

//ruta al panel de gestion
/*Route::get('panel',function(){
    return View('panel');
});*/
//ruta a un controlador @ la funcion
//Route::get('principal','ControllerPanel@visorPrincipal');

//controladores recurso restfull
//Route::resource('panel','ControllerRestPanel');

Route::get('panel/{indice}','ControllerRestPanel@incidencia');
Route::get('panel','ControllerRestPanel@index');
Route::get('panelresolver/{indice}','ControllerRestPanel@resolver');

Route::get('/', function () {
    return view('welcome');
});

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
