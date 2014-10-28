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
      <li class="active"><a href="/logout">Logut</a></li>
    </ul>
  </section>
</nav>

<br>

<div class="row">
  <!-- detalles -->
  <div class="large-6 columns">
    <table>
      <thead>
        <?php
        $apodoStr = "";
        $apodo = Alternativenickname::where('user_id', '=', $usuarioB->id)->where('user_id_origen', '=', $usuarioA->id)->get();
        if(isset($apodo[0])){
          $apodoStr = "(" . $apodo[0]->nickname . ")";
        }
        ?>
        <tr>
          <th width="80">Puse</th>
          <th width="300"><?php echo ($cuentaAbierta->balance*$direction < 0) ? "-" : ""; ?>${{$cuentaAbierta->balance*$cuentaAbierta->balance/abs($cuentaAbierta->balance)}} con {{$cuentaAbierta->usuarioB->first_name}} {{$apodoStr}}</th>
          <th width="80">Puso</th>
        </tr>
      </thead>
      <tbody>
      @foreach($cuentaAbierta->detalles5 as $detalle)
        <tr>
          <td><?php echo ($detalle->direction*$direction > 0) ? "$".$detalle->ammount : ""; ?></td>
          <td>{{substr($detalle->created_at, 0, -9)}} {{$detalle->description}}</td>
          <td><?php echo ($detalle->direction*$direction < 0) ? "$".$detalle->ammount : ""; ?></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- forma para agregar detalles -->
  <div class="large-6 columns">
    <form action="/agregaracuentaabierta" method='post'>
      <div class="row">
          <div class="small-12 columns">
              <h3>Agrega un préstamo o pago a esta Cuenta abierta</h3>
              <input type="hidden" name='cuenta_id' value="{{$cuentaAbierta->id}}">
              <input type="hidden" name='usuarioB' value="{{$usuarioB->id}}">
              <input type="hidden" name='direction' value="{{$direction}}">
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
              <div class='textoLogin'>&nbsp;<?php echo isset($_GET["error"]) ? "Error de tipo cuenta" :""; ?></div>
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
</div>
    	
@stop