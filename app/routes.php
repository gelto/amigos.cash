<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses'=>'InicioController@inicio'));
Route::get('/bienvenido', array('before' => 'logeado', 'uses'=>'InicioController@bienvenido'));

// *********** //
// ** LOGEO ** //
// *********** //

Route::filter('logeado', function()
{
    if ( ! Sentry::check())
    {
        return Redirect::to('/');
    }
});

Route::get('/login/{error?}', array('uses'=>'InicioController@login'));
Route::post('/loginback', array('before' => 'csrf', 'uses'=>'InicioController@loginback'));

Route::get('/logout', function()
{
    if ( Sentry::check())
    {
        Sentry::logout();
    }
    
    return Redirect::to('/');
});

Route::post('/registro', array('before' => 'csrf', 'uses' => 'InicioController@registro'));
Route::get('/validacion/{codigo?}', array('uses' => 'InicioController@validacion'));

// *************** //
// ** LOGEO FIN ** //
// *************** //

// ************* //
// ** CUENTAS ** //
// ************* //

Route::get('nuevacuentaabierta', array('before' => 'logeado', 'uses'=>'CuentasController@nuevacuentaabierta'));
Route::post('nuevacuentaabierta', array('before' => 'logeado', 'uses'=>'CuentasController@nuevacuentaabiertaback'));

Route::get('detallecuentaabierta/{id}', array('before' => 'logeado', 'uses'=>'CuentasController@detallecuentaabierta'));
Route::post('agregaracuentaabierta', array('before' => 'logeado', 'uses'=>'CuentasController@agregaracuentaabierta'));

// ***************** //
// ** CUENTAS FIN ** //
// ***************** //

// ************ //
// ** AMIGOS ** //
// ************ //
Route::get('amigos', array('before' => 'logeado', 'uses'=>'AmigosController@lista'));
Route::post('cambiaamigo', array('before' => 'csrf', 'before' => 'logeado', 'uses'=>'AmigosController@cambiaamigo'));
// **************** //
// ** AMIGOS FIN ** //
// **************** //

// *************** //
// ** MI CUENTA ** //
// *************** //
Route::get('micuenta', array('before' => 'logeado', 'uses'=>'PersonasController@micuenta'));
Route::get('vinculacion/{token}/{id}/{email}', array('before' => 'logeado', 'uses'=>'PersonasController@vinculacion'));
Route::post('agregaemail', array('before' => 'csrf', 'before' => 'logeado', 'uses'=>'PersonasController@agregaemail'));
// ******************* //
// ** MI CUENTA FIN ** //
// ******************* //

// ***************** //
// ** EMAIL TESTS ** //
// ***************** //

Route::get("correo", function(){ 

	return View::make('emails.usuarioBprueba')->with('email', "email@email.com");
});

// ********************* //
// ** EMAIL TESTS FIN ** //
// ********************* //