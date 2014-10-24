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

		$userA = Sentry::getUser();
		
		// busca el usuario por el mail del amigo en users y mails alternativos
		try{
			$userB = Sentry::findUserByCredentials(array(
	        	'email'      => $emaildeamigo,
	    	));
		}catch(Exception $e){
			$alternativeB = Alternativeemail::where('email', "=", $emaildeamigo)->get();
			$userB = $alternativeB->usuario();
		}
		// si lo encuentra 
		if(isset($userB->id)){
			// busca una cuenta abierta entre los 2 usuarios
			$cuentaAbierta = Openaccount::where("user_idA", "=", $userA->id)->where("user_idB", "=", $userB->id)->get();

			// si la encuentra agrega un detalle en la cuenta abierta y actualiza balance
			if(isset($cuentaAbierta[0]->id)){
				$detalle = new Openaccountdetail;
				$detalle->openaccount_id = $cuentaAbierta[0]->id;
				$detalle->direction = $direccion_deuda;
				$detalle->ammount = $cantidad;
				$detalle->description = $concepto;
				$detalle->status = "SIN CONFIRMAR";
				$detalle->save();

				$cuentaAbierta[0]->balance += $direccion_deuda * $cantidad;
				$cuentaAbierta[0]->token = rand(1,9999);
				$cuentaAbierta[0]->save();
				return "a ver??";
			}else{ // si no, crea una nueva cuenta, un nuevo detalle y un nuevo nickname
				return "aquí no debería entrar";
			}
			return "si lo encontró";
		}else{ 
			// si no, crea un usuario amigo con password odiolaluzazulaloido y un nickname e email alternativo
			$userB = Sentry::createUser(array(
		    	'first_name'	=> $nombredeamigo,
		        'email'			=> $emaildeamigo,
		        'password'		=> 'odiolaluzazulaloido',
		        'activated'		=> false,
		    ));

		    $nickname = new Alternativenickname;
		    $nickname->user_id = $userB->id;
		    $nickname->user_id_origen = $userA->id;
		    $nickname->nickname = $nombredeamigo;
		    $nickname->status = "ACTIVO";
		    $nickname->save();

		    $alemail = new Alternativeemail;
		    $alemail->user_id = $userB->id;
		    $alemail->email = $emaildeamigo;
		    $alemail->status = "ACTIVO";
		    $alemail->save();

			// crea una cuenta abierta nueva y un detalle de cuenta
			
			$nuevaCuenta = new Openaccount;
			$nuevaCuenta->user_idA = $userA->id;
			$nuevaCuenta->user_idB = $userB->id;
			$nuevaCuenta->balance = $direccion_deuda * $cantidad;
			$nuevaCuenta->token = rand(1,9999);
			$nuevaCuenta->status = "SIN CONFIRMAR";
			$nuevaCuenta->save();

			$detalle = new Openaccountdetail;
			$detalle->openaccount_id = $nuevaCuenta->id;
			$detalle->direction = $direccion_deuda;
			$detalle->ammount = $cantidad;
			$detalle->description = $concepto;
			$detalle->status = "SIN CONFIRMAR";
			$detalle->save();

            // MAIL USER B
            $data=array();
			$favor = "su";
			if($direccion_deuda == -1){
				$favor = "tu";
			}            
            $data['mensaje'] = "Tu amigo ".$userA->first_name." que te conoce como ".$nombredeamigo." ha registrado una deuda de ".$cantidad." a ".$favor." favor en nuestro sistema Amigos.Cash<br><br>Este mail es una forma de notificarte y no hace falta que hagas mas<br><br>para facilitarle a tu amigo el control de esta deuda si deseas confirmar que la deuda es correcta puedes hacerlo en el siguiente enlace: <a href='www.amigos.cash/validacuentaabierta/".$nuevaCuenta->id."/".$nuevaCuenta->token."/".$userA->email."/".$userB->email."'>CONFIRMAR</a><br><br>O bien puedes regstrarte en: <a href='www.amigos.cash'>Amigos.Cash</a><br><br>Por último si ya eres parte de nuestro portal y deseas vicular este email a tu cuenta principal puedes hacerlo en la sección de settings en el menú superior. Todas las cuentas que tengas quedarán vinculadas a tu mail principal"; 
            $vista = 'emails.mensajegral';
            $email = $userB->email;
            $data['email'] = $email;
            $data['subject'] = $subject = 'Tu amigo ' . $userA->first_name . ' tiene un mensaje para ti';
            
            Mail::queue($vista, $data, function($message) use ($email, $subject)
            {
                $message->to($email, 'Amigos Cash')->subject($subject);
            });
            // MAIL fin
		}

		
		// MAIL USER A
        $data=array();
        
        $data['mensaje'] = "Tu cuenta abierta ha sido creada y/o actualizada en Amigos Cash. <br> El monto fue de $".($direccion_deuda*$cantidad)." con tu amigo ".$nombredeamigo.". Puedes checar todos los detalles en : <a href='www.amigos.cash'>Amigos.Cash</a>"; 
        $vista = 'emails.mensajegral';
        $email = $userA->email;
        $data['email'] = $email;
        
        Mail::queue($vista, $data, function($message) use ($email)
        {
            $message->to($email, 'Amigos Cash')->subject('Cuenta abierta');
        });
        // MAIL fin
        

		// fulano creo una deuda de 500 pesos. Este mail es una forma de notificarte y no hace falta que hagas mas.
		// pero si deseas confirmar que la deuda es correcta puedes hacerlo en el siguiente enlace
		// o bien puedes registrarte en sdfsdf
		// Si ya cuentas con una cuenta de amigos.cash y deseas vincular este email puedes hacerlo en la sección de settings

		
		return "ola k ase";
		return View::make('nuevacuentaabierta');
	}

}