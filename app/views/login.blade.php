@extends('layouts.iniciolayout')
@section('content')

<div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Amigos Cash - La red social del préstamos entre amigos</a>
        </div>
    </div>
</div>

<br><br><br>

<div class="container">

  <form class="form-signin" role="form" action="/" method='post'>
    <h2 class="form-signin-heading">Inicio de Sesión</h2>
    <input type="email" name='email' class="form-control email" placeholder="Email" required autofocus><br/>
    <input type="password" name='pass' class="form-control pass" placeholder="Password" required>
    <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Usuario y/o Password incorrectos" :""; ?></div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entar</button>
  </form>

  <br>

  <form class="form-signin" role="form" action="/registro" method='post'>
    <h2 class="form-signin-heading">Registro</h2>
    <input type="text" name='name' class="form-control name" placeholder="Nombre y apellido" required autofocus><br/>
    <input type="email" name='email' class="form-control email" placeholder="Email" required ><br/>
    <input type="password" name='pass' class="form-control pass" placeholder="Password" required>
    <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Usuario y/o Password incorrectos" :""; ?></div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
  </form>

</div>
    	
@stop

