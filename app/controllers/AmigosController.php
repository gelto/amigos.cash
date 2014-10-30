<?php

class AmigosController extends BaseController {

	public function lista()
	{
		$userL = Sentry::getUser();
		// trae las cuentas creadas
		$cuentasCreadas = Openaccount::where('user_idA', '=', $userL->id)->get();
		// trae las cuentas donde fue "invitado"
		$cuentasInvitado = Openaccount::where('user_idB', '=', $userL->id)->get();

		return View::make('listaamigos')
		->with('cuentasCreadas', $cuentasCreadas)
		->with('cuentasInvitado', $cuentasInvitado)
		->with('usuarioL', $userL);
	}

	public function cambiaamigo()
	{
		$userL = Sentry::getUser();

		Validator::extend('alpha_spaces', function($attribute, $value)
		{
			return preg_match('/^[\pL\s]+$/u', $value);
		});

		$email = Input::get('email');
		$nickname = Input::get('nickname');
		$cuentaId = Input::get('cuenta_id');
		$amigoId = Input::get('amigo_id');

		$rules = array(
	        'nickname' => array('required', 'alpha_spaces', 'min:1', 'max:50'),
	        'cuenta_id' => array('required', 'numeric'),
	        'amigo_id' => array('required', 'numeric'),
	        'email'  => array('required', 'email')
	    );

	    $validation = Validator::make(Input::all(), $rules);
	    $encontrado = false;

		if(!$validation->fails()){
			$cuentaAbierta = Openaccount::find($cuentaId);
			// checar que la cuenta exista y que el amigo sea a o b
			if($cuentaAbierta->usuarioB->id == $amigoId){
				// cambia el nickname alternativo
				$nicknameAltA = Alternativenickname::where('user_id', '=', $cuentaAbierta->usuarioB->id)->where('user_id_origen', '=', $userL->id)->get();
				if(isset($nicknameAltA[0])){
					$nicknameAltA[0]->nickname = $nickname;
					$nicknameAltA[0]->save();
				}
				$encontrado = true;
			}else if($cuentaAbierta->usuarioA->id == $amigoId){
				// cambia el nickname alternativo
				$nicknameAltB = Alternativenickname::where('user_id', '=', $userL->id)->where('user_id_origen', '=', $cuentaAbierta->usuarioB->id)->get();
				if(isset($nicknameAltB[0])){
					$nicknameAltB[0]->nickname = $nickname;
					$nicknameAltB[0]->save();
				}else{
					$nicknameAltB = new Alternativenickname;
					$nicknameAltB->user_id = $cuentaAbierta->usuarioA->id;
					$nicknameAltB->user_id_origen = $userL->id;
					$nicknameAltB->nickname = $nickname;
					$nicknameAltB->save();
				}
				$encontrado = true;
			}

			if($encontrado){
				try{
					// si lo encuentra aquí quiere decir que nunca se ha logeado
					$user = Sentry::findUserById($amigoId);
					if($user->activated == 0){
						$user->email = $email;
				    	$user->save();

				    	$emailAlt = Alternativeemail::where('user_id', '=', $cuentaAbierta->usuarioB->id)->where('email', '=', $email)->get();
						if(isset($emailAlt[0])){
							$emailAlt[0]->email = $email;
							$emailAlt[0]->save();
						}
					}			    	
				}catch(Exception $e){
					return $e->getMessage();
				}
			}
		}
		return Redirect::to("/amigos");
	}
}