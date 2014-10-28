<?php

class Openaccount extends Eloquent {
	public function usuarioA()
    {
        return $this->belongsTo('User', 'user_idA');
    }

	public function usuarioB()
    {
        return $this->belongsTo('User', 'user_idB');
    }

    public function detalles5()
    {
        return $this->hasMany('Openaccountdetail')->orderBy('id', 'desc')->take(5);
    }
}