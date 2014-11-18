@extends('layouts.iniciolayout')
@section('content')
    
<div class="row">
    <div class="large-1 columns">&nbsp;</div>
    <div class="large-4 columns">
        <form action="/loginback" method='post' id="loginForm">
            {{ Form::token() }}
            <div class="row">
                <div class="small-12 columns">
                    <h3>Inicio de Sesión</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='email' placeholder="Email" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="password" name='pass' placeholder="Password" value="">
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    @if($error == "usuario o contraseña equivocados")
                    <div data-alert class="alert-box alert round">
                      {{$error}}
                      <a href="#" class="close">&times;</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">&nbsp;</div>
                <div class="small-8 columns">
                    <button class="large round button expand" type="submit">Entrar</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="small-2 columns">&nbsp;</div>
                <div class="small-8 columns">
                    <button id="recuperarButton" class="small round button expand" type="button">Recuperar contraseña</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
        </form>
    </div>
    <div class="large-2 columns">&nbsp;<br><br><br><br></div>
    <div class="large-4 columns">
        <form action="/registro" method='post'>
            {{ Form::token() }}
            <div class="row">
                <div class="small-12 columns">
                    <h3>Registro</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="text" name='name' placeholder="Nombre y apellido" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='email' placeholder="Email" value="" required >
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="password" name='pass' placeholder="Password" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    @if($error == "usuario o email no disponibles")
                    <div data-alert class="alert-box alert round">
                      {{$error}}
                      <a href="#" class="close">&times;</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">&nbsp;</div>
                <div class="small-8 columns">
                    <button class="large round button expand" type="submit">Registrarse</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
        </form>
    </div>
    <div class="large-1 columns">&nbsp;</div>
</div>
    	
@stop

