@extends('layouts.iniciolayoutin')
@section('content')

<div class="row">
  <!-- ecuentas sin interes -->
  <div class="large-5 column">
    <h3>Cuentas abiertas: {{ count($cuentasAbiertasFavor) + count($cuentasAbiertasContra) + count($cuentasAbiertasFavorInvertidas) + count($cuentasAbiertasContraInvertidas) }}</h3>
    <div class="panel">
      @foreach($cuentasAbiertasFavor as $ca)
      <div class="row">
        <div class="small-4 column">
          <a href="detallecuentaabierta/{{$ca->id}}">
            <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
          </a>
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ca->usuarioB->id)->where('user_id_origen', '=', $userA->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              + ${{$ca->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ca->usuarioB->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($cuentasAbiertasFavorInvertidas as $ca)
      <div class="row">
        <div class="small-4 column">
          <a href="detallecuentaabierta/{{$ca->id}}">
            <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
          </a>
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ca->usuarioA->id)->where('user_id_origen', '=', $ca->usuarioB->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              + ${{-1*$ca->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ca->usuarioA->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="panel">
      @foreach($cuentasAbiertasContra as $ca)
      <div class="row">
        <div class="small-4 column">
          <a href="detallecuentaabierta/{{$ca->id}}">
            <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
          </a>
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ca->usuarioB->id)->where('user_id_origen', '=', $ca->usuarioA->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              - ${{-1*$ca->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ca->usuarioB->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($cuentasAbiertasContraInvertidas as $ca)
      <div class="row">
        <div class="small-4 column">
          <a href="detallecuentaabierta/{{$ca->id}}">
            <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
          </a>
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ca->usuarioA->id)->where('user_id_origen', '=', $ca->usuarioB->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              - ${{$ca->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ca->usuarioA->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
    <div class="row">
      <div class="small-12 column">
        <a href="/nuevacuentaabierta" class="button expand">Nueva cuenta abierta</a>
      </div>
    </div>
  </div>
  <!-- espacio entre columnas -->
  <div class="large-2 column">
    &nbsp;
  </div>
  <!-- cuentas con interes -->
  <div class="large-5 column">
    <h3>Cuentas con interés: {{ count($cuentasInteresFavor) + count($cuentasInteresContra) }}</h3>
    <div class="panel">
      @foreach($cuentasInteresFavor as $ci)
      <div class="row">
        <div class="small-4 column">
          <a href="detallecuentainteres/{{$ci->id}}">
            <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
          </a>
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ci->usuarioB->id)->where('user_id_origen', '=', $userA->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              + ${{$ci->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ci->usuarioB->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="panel">
      @foreach($cuentasInteresContra as $ci)
      <div class="row">
        <div class="small-4 column">
          <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
        </div>
        <div class="small-8 column">
          <?php
          $apodoStr = "";
          $apodo = Alternativenickname::where('user_id', '=', $ci->usuarioB->id)->where('user_id_origen', '=', $userA->id)->get();
          if(isset($apodo[0])){
            $apodoStr = "(" . $apodo[0]->nickname . ")";
          }
          ?>
          <div class="row">
            <div class="small-12 columns">
              - ${{-1*$ci->balance}}
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <p>{{$ci->usuarioB->first_name}} {{$apodoStr}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
    <div class="row">
      <div class="small-12 column">
        <a href="/nuevacuentainteres" class="button expand">Nueva cuenta con interés</a>
      </div>
    </div>
  </div>

</div>
    	
@stop