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

<br><br><br>

<div class="row">
    <div class="small-4 columns">&nbsp;</div>
    <div class="small-4 columns">
        <h3>Inicio de Sesión</h3>
    </div>
    <div class="small-4 columns">&nbsp;</div>
</div>

<form action="/loginback" method='post'>    
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <input type="email" name='email' placeholder="Email" required>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <input type="password" name='pass' placeholder="Password" required>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Usuario y/o Password incorrectos" :""; ?></div>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <button class="small round button" type="submit">Entar</button>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
</form>

  <br><hr><br>

<div class="row">
    <div class="small-4 columns">&nbsp;</div>
    <div class="small-4 columns">
        <h3>Registro</h3>
    </div>
    <div class="small-4 columns">&nbsp;</div>
</div>

<form action="/registro" method='post'>    
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <input type="text" name='name' placeholder="Nombre y apellido" required>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <input type="email" name='email' placeholder="Email" required >
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <input type="password" name='pass' placeholder="Password" required>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Usuario y/o Password incorrectos" :""; ?></div>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
    <div class="row">
        <div class="small-4 columns">&nbsp;</div>
        <div class="small-4 columns">
            <button class="small round button" type="submit">Registrarse</button>
        </div>
        <div class="small-4 columns">&nbsp;</div>
    </div>
</form>

</div>
    	
@stop

