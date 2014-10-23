<?php

class CuentasController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function nuevacuentaabierta()
	{
		return View::make('nuevacuentaabierta');
	}

	public function nuevacuentaabiertaback()
	{
		$nombredeamigo = Input::get('nombredeamigo');
		$emaildeamigo = Input::get('emaildeamigo');
		$cantidad = Input::get('cantidad');
		$concepto = Input::get('concepto');
		$direccion_deuda = Input::get('direccion_deuda');
		
		return "todo llegó bien XD";

		// busca el usuario por el mail del amigo en users y mails alternativos
		// si lo encuentra busca una cuenta abierta entre los 2 usuarios
			// si la encuentra agrega un detalle en la cuenta abierta y actualiza balance
			// si no, crea una nueva cuenta y un nuevo detalle	
		// si no, crea un usuario amigo con password odiolaluzazulaloido
			// crea una cuenta abierta nueva y un detalle de cuenta
		
		// envía correo a ambos usuarios

		// fulano creo una deuda de 500 pesos. Este mail es una forma de notificarte y no hace falta que hagas mas.
		// pero si deseas confirmar que la deuda es correcta puedes hacerlo en el siguiente enlace
		// o bien puedes registrarte en sdfsdf
		// Si ya cuentas con una cuenta de amigos.cash y deseas vincular este email puedes hacerlo en la sección de settings

		

		return View::make('nuevacuentaabierta');
	}

}