@extends('layouts.iniciolayoutin')
@section('content')

<div class="row">
  <!-- ecuentas sin interes -->
  <div class="large-5 column">
    <h3>Cuentas abiertas: {{ count($cuentasAbiertasFavor) + count($cuentasAbiertasContra) + count($cuentasAbiertasFavorInvertidas) + count($cuentasAbiertasContraInvertidas) }}</h3>
      @foreach($cuentasAbiertasFavor as $ca)
      <div class="panel">
        <div class="row">
          <div class="small-4 column">
            <a href="detallecuentaabierta/{{$ca->id}}">
              @if($ca->usuarioB->image != null)
              <img src="{{Config::get('miconfig.publicvar')}}{{$ca->usuarioB->image}}">
              @else
              <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
              @endif
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
      </div>
      @endforeach
      @foreach($cuentasAbiertasFavorInvertidas as $ca)
      <div class="panel">
        <div class="row">
          <div class="small-4 column">
            <a href="detallecuentaabierta/{{$ca->id}}">
              @if($ca->usuarioA->image != null)
              <img src="{{Config::get('miconfig.publicvar')}}{{$ca->usuarioA->image}}">
              @else
              <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
              @endif
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
                + $@if($ca->balance != 0) {{-1*$ca->balance}} @else {{$ca->balance}} @endif 
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns">
                <p>{{$ca->usuarioA->first_name}} {{$apodoStr}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    
      @foreach($cuentasAbiertasContra as $ca)
      <div class="panel">
        <div class="row">
          <div class="small-4 column">
            <a href="detallecuentaabierta/{{$ca->id}}">
              @if($ca->usuarioB->image != null)
              <img src="{{Config::get('miconfig.publicvar')}}{{$ca->usuarioB->image}}">
              @else
              <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
              @endif
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
                @if($ca->balance != 0) - @endif ${{$ca->balance/-1.00}}
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns">
                <p>{{$ca->usuarioB->first_name}} {{$apodoStr}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($cuentasAbiertasContraInvertidas as $ca)
      <div class="panel">
        <div class="row">
          <div class="small-4 column">
            <a href="detallecuentaabierta/{{$ca->id}}">
              @if($ca->usuarioA->image != null)
              <img src="{{Config::get('miconfig.publicvar')}}{{$ca->usuarioA->image}}">
              @else
              <img src="{{Config::get('miconfig.publicvar')}}imagenesperfiles/placeholder.jpg">
              @endif
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
                @if($ca->balance != 0) - @endif ${{$ca->balance}}
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns">
                <p>{{$ca->usuarioA->first_name}} {{$apodoStr}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    
    <div class="row">
      <div class="small-12 column">
        <a href="/nuevacuentaabierta" class="button expand">Nueva cuenta abierta</a>
      </div>
    </div>
    <div class="row">
      <div class="small-12 column">
        <!--a href="/nuevacuentaconinteres" class="button expand">Nueva cuenta con interés</a-->
      </div>
    </div>
  </div>
  <!-- espacio entre columnas -->
  <div class="large-7 column">
    &nbsp;
  </div>

</div>
    	
@stop