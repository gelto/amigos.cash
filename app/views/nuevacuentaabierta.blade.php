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
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="logout">Logut</a></li>
    </ul>
  </section>
</nav>

    
<div class="row">
    <div class="large-4 columns">&nbsp;</div>
    <div class="large-4 columns">
        <form action="/nuevacuentaabierta" method='post'>
            <div class="row">
                <div class="small-12 columns">
                    <h3>Nueva Cuenta abierta</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="text" name='nombredeamigo' placeholder="¿Cómo le dices a tu amigo?" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='emaildeamigo' placeholder="¿qué email conoces de tu amigo?" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="number" name='cantidad' placeholder="Cantidad en pesos" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <textarea name="concepto" placeholder="Es importante que expliques el concepto del préstamo para recordarlo después ;)"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <label>¿Quién le debe a quién?</label>
                    <input type="radio" name="direccion_deuda" value="1" ><label for="pokemonRed">Yo presté</label>
                    <input type="radio" name="direccion_deuda" value="-1" ><label for="pokemonBlue">Me prestaron</label>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Usuario y/o Password incorrectos" :""; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">&nbsp;</div>
                <div class="small-8 columns">
                    <button class="large round button expand" type="submit">Guardar</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
        </form>
    </div>
    <div class="large-4 columns">&nbsp;</div>
</div>

    	
@stop

