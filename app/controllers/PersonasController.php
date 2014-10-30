<?php

class PersonasController extends BaseController {

	public function micuenta()
	{
		$userL = Sentry::getUser();

		$alternativeemails = Alternativeemail::where('user_id', '=',$userL->id)->get();

		return View::make('micuenta')->with('userL', $userL)->with('alternativeemails', $alternativeemails);
	}

	public function agregaemail()
	{
		$userL = Sentry::getUser();

		$email = Input::get('email');
		$userId = Input::get('user_id');

		$rules = array(
			'user_id' => array('required', 'numeric'),
	        'email'  => array('required', 'email')
	    );

	    $validation = Validator::make(Input::all(), $rules);

	    if(!$validation->fails() && $userL->id == $userId){

	    	$alternativeEmailArr = Alternativeemail::where('email', '=', $email)->get();
	    	if(isset($alternativeEmailArr[0])){
	    		$alternativeEmail = $alternativeEmailArr[0];
	    	}else{
	    		$alternativeEmail = new Alternativeemail;
	    		$alternativeEmail->email = $email;
	    		$alternativeEmail->save();
	    	}

	    	// crea un token para comprobar el email
	    	$activationCode = $userL->getActivationCode();
	    	// envía mail de pre confirmación
	    	// MAIL
            $data=array();
            
            $data['mensaje'] = "Gracias por registrar o vincular este email a tu cuenta principal en el sistema de Amigos Cash. <br> Por favor confirma tu dirección de email haciendo click en el siguiente enlace: <a href='www.amigos.cash/vinculacion/".$activationCode."/".$alternativeEmail->id."/".$alternativeEmail->email."'>Amigos.Cash/validacion/".$activationCode."</a><br>Si consideras que ha habido un error has caso omiso de este mensaje."; 
            $vista = 'emails.mensajegral';
            $data['email'] = $email;
            $nombre = $userL->first_name;
            
            Mail::queue($vista, $data, function($message) use ($email, $nombre)
            {
                $message->to($email, $nombre)->subject('Nuevo email');
            });
            // MAIL fin
	    }
	}

	public function vinculacion($token, $id, $email)
	{
		$userL = Sentry::getUser();

		try{
			
			// si el id es el mismo que logeado continua
			if($userL->activation_code == $token){

				// adjudica el nuevo email al usuairo logeado
				$alternativeEmailArr = Alternativeemail::where('id', '=', $id)->where('email', '=', $email)->get();
				if(isset($alternativeEmailArr[0])){
					$alternativeEmail = $alternativeEmailArr[0];
					$alternativeEmail->user_id = $userL->id;
					$alternativeEmail->save();
					// cambia el token por nulo TODO
					// busca un usuario con el email alternativo
					$otroUsuario = Sentry::findUserByLogin($email);
					
					// si lo encuentra lo borra
					if(isset($otroUsuario->id)){
						$otroUsuario->activated = 0;
						$otroUsuario->save();
						// busca las cuentas donde el usuario borrado fue usado y las cambia por el nuevo user
						$cuentasAbiertas = Openaccount::where('user_idA', '=', $otroUsuario->id)->get();
						foreach($cuentasAbiertas as $ca){
							$ca->user_idA = $userL->id;
							$ca->save();
						}
						$cuentasAbiertasB = Openaccount::where('user_idB', '=', $otroUsuario->id)->get();
						foreach($cuentasAbiertasB as $ca){
							$ca->user_idB = $userL->id;
							$ca->save();
						}
						// lo mismo para nicknames alternativos
						$nicksalternativos = Alternativenickname::where('user_id', '=', $otroUsuario->id)->get();
						foreach($nicksalternativos as $ni){
							$ni->user_id = $userL->id;
							$ni->save();
						}
						$nicksalternativos = Alternativenickname::where('user_id_origen', '=', $otroUsuario->id)->get();
						foreach($nicksalternativos as $ni){
							$ni->user_id_origen = $userL->id;
							$ni->save();
						}
						// lo mismo para emails alternativos
						$mailsalternativos = Alternativeemail::where('user_id', '=', $otroUsuario->id)->get();
						foreach($mailsalternativos as $em){
							$em->user_id = $userL->id;
							$em->save();
						}
						$otroUsuario->delete();
					}
				}

				// busca las cuentas y los nicknames alternativos donde user a y b sean el logueado y las borra
				$cuentasIguales = Openaccount::where('user_idA', '=', $userL->id)->where('user_idB', '=', $userL->id)->get();
				foreach($cuentasIguales as $cig){
					$cig->delete();
				}
				$nicknamesIguales = Alternativenickname::where('user_id', '=', $userL->id)->where('user_id_origen', '=', $userL->id)->get();
				foreach($nicknamesIguales as $nig){
					$nig->delete();
				}
			}
		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

}