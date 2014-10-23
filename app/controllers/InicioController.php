<?php

class InicioController extends BaseController {

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

	public function inicio()
	{
		// TODO redirigir a bienvenido si está logeado
		return View::make('inicio');
	}

	public function login()
	{
		// TODO redirigir a bienvenido si está logeado
		return View::make('login');
	}

	public function loginback(){
		$email = Input::get('email');
		$password = Input::get('pass');

		try{
			$user = Sentry::findUserByCredentials(array(
	        	'email'      => $email,
	        	'password'	 => $password,
	    	));
			
			Sentry::login($user, false);

			return Redirect::to("/");

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function registro(){
		$name = Input::get('name');
		$email = Input::get('email');
		$password = Input::get('pass');

		// busca el email
		try{
			$user = Sentry::findUserByCredentials(array(
	        	'email'      => $email,
	    	));
			var_dump($user);
			// si lo encuentra y no tiene password lo actualiza
			// si lo encuentra y tiene password manda mensaje de error de email registrado
		}catch(Exception $e){
			// si no lo encuentra lo registra
			try
			{
			    // Let's register a user.
			    $user = Sentry::createUser(array(
			    	'first_name'	=> $name,
			        'email'			=> $email,
			        'password'		=> $password,
			        'activated'		=> false,
			    ));

			    // Let's get the activation code
			    $activationCode = $user->getActivationCode();

			    // MAIL
                $data=array();
                
                $data['mensaje'] = "Gracias por registrarte en el sistema de Amigos Cash. <br> Por favor confirma tu dirección de email haciend click en el siguiente enlace: <a href='www.amigos.cash/validacion/".$activationCode."'>Amigos.Cash/validacion/".$activationCode."</a>"; 
                $vista = 'emails.mensajegral';
                $data['email'] = $email;
                
                Mail::queue($vista, $data, function($message) use ($email)
                {
                    $message->to($email, 'Foto Factura')->subject('Bienvenido');
                });
                // MAIL fin

			    // Send activation code to the user so he can activate the account
			}
			catch (Exception $e)
			{
			    echo $e->getMessage();
			}
		}
		
		// TODO una vista de gracias checa tu mail
		return Redirect::to("/");
	}

	// valida el código de registro
	public function validacion($codigo)
	{
		// busca el codigo
		try{
			$user = Sentry::findUserByActivationCode($codigo);
			// si lo encuentra lo activa
			$user->attemptActivation($codigo);

			// lo logea
			Sentry::login($user, false);

			return Redirect::to("/bienvenido");

		}catch(Exception $e){
			echo $e->getMessage();
		}
		
		return Redirect::to("/login");
	}

	public function bienvenido(){
		return View::make('bienvenido');
	}

}