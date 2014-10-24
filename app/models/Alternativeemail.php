<?php

class Alternativeemail extends Eloquent {
	public function usuario()
    {
        return $this->belongsTo('User');
    }
}