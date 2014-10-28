@extends('layouts.iniciolayout')
@section('content')

<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Amigos Cash - La red social del préstamos entre amigos</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
</nav>

<br><br>

    
<div class="row">
    <div class="large-1 columns">&nbsp;</div>
    <div class="large-4 columns">
        <form action="/loginback" method='post'>
            {{ Form::token() }}
            <div class="row">
                <div class="small-12 columns">
                    <h3>Inicio de Sesión</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='email' placeholder="Email" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="password" name='pass' placeholder="Password" required>
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
                    <button class="large round button expand" type="submit">Entar</button>
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
                    <input type="text" name='name' placeholder="Nombre y apellido" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='email' placeholder="Email" required >
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="password" name='pass' placeholder="Password" required>
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

