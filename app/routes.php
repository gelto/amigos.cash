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

Route::get('/logout', function()
{
    if ( Sentry::check())
    {
        Sentry::logout();
    }
    
    return Redirect::to('/');
});

// *************** //
// ** LOGEO FIN ** //
// *************** //

