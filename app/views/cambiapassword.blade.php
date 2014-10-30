@extends('layouts.iniciolayout')
@section('content')
    
<div class="row">
    <div class="large-1 columns">&nbsp;</div>
    <div class="large-4 columns">
        <form action="/finderecuperarpassword" method='post'>
            {{ Form::token() }}
            <div class="row">
                <div class="small-12 columns">
                    <h3>Escribe tu nuevo password</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="password" name='password' placeholder="Password" value="" required>
                    <input type="hidden" name='resetcode' value="{{$resetcode}}" >
                    <input type="hidden" name='id' value="{{$id}}" >
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">&nbsp;</div>
                <div class="small-8 columns">
                    <button class="large round button expand" type="submit">Cambiar</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
        </form>
    </div>
    <div class="large-7 columns">&nbsp;<br><br><br></div>
</div>
    	
@stop

