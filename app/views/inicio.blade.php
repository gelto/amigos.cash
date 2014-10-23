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
      <li class="active"><a href="login">Login</a></li>
    </ul>
  </section>
</nav>

<br><br>
    
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h3>Estamos muy felices que hayas decidido probar Amigos Cash</h3>
          <p>La mayoría de las operaciones funcionan por email, así tu ni te preocupas de logeo o avisos.</p>
          <p>Aún así para que puedas usar tranquilamente el sistema te dejamos un resumen de las 3 cosas puedes hacer:</p>
          <div class="row">
            <div class="large-4 medium-4 columns">
                <p><a href="/login">Registrar amigos</a><br />Simplemente crea un alias de como conoces tu a tus amigos y registra un mail que conozcas de ellos</p>
            </div>
            <div class="large-4 medium-4 columns">
                <p><a href="/login">Lleva cuentas abiertas</a><br />Controla ese debo-me-deben del día a día con tu amigo que a veces presta (dinero) y a veces pide (dinero)</p>
            </div>
            <div class="large-4 medium-4 columns">
                <p><a href="/login">Cuentas con intereses</a><br />Si ya conoces bien a tu amigo y necesita dinero, préstale con un interés mucho mas bajo que el banco (1% mensual). Elige los plazos y nosotros nos encargamos de recordarle</p>
            </div>        
          </div>
        </div>
      </div>
    </div>
    	
@stop