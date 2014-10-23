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

<br>

<div class="row">
  <div class="medium-5 column">
    <div class="panel">
      <h3>Cuentas abiertas: 0</h3>
      <div class="row">
        <div class="medium-12 column">
          <h5>Cuentas abiertas a favor</h5>
        </div>
      </div>
      <div class="row">
        <div class="medium-12 column">
          <h5>Cuentas abiertas donde debo</h5>
        </div>
      </div>
      <br>
      <a href="/nuevacuentaabierta" class="small button">Nueva :)</a>
    </div>
  </div>
  <div class="medium-2 column">
    &nbsp;
  </div>
  <div class="medium-5 column">
    <div class="panel">
      <h3>Cuentas con interés: 0</h3>
      <div class="row">
        <div class="medium-12 column">
          <h5>Cuentas con interés a favor</h5>
        </div>
      </div>
      <div class="row">
        <div class="medium-12 column">
          <h5>Cuentas con interés donde debo</h5>
        </div>
      </div>
    </div>
  </div>
</div>
    	
@stop