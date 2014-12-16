@extends('layouts.iniciolayoutin')
@section('content')
    
<div class="row">
    <div class="large-4 columns">&nbsp;</div>
    <div class="large-4 columns">
        <div class="row" id="noLogeado">
            <div class="small-12 columns">
                <h3>Primero debes hacer log in en facebook</h3>
                <fb:login-button data-max-rows="1" data-show-faces="false" data-auto-logout-link="false" scope="public_profile,email,user_friends" onlogin="checkLoginState();">
    </fb:login-button>
            </div>
        </div>
        <div class="row" id="logeado">
            <div class="small-12 columns">
                kk
            </div>
        </div>
    </div>
    <div class="large-4 columns">&nbsp;</div>
</div>

    	
@stop

