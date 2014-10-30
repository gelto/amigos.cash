@extends('layouts.iniciolayoutin')
@section('content')
    
<div class="row">
    <div class="large-1 columns">&nbsp;</div>
    <div class="large-4 columns">
        <div class="panel">
            <form action="/cambiamicuenta" method='post'>
                {{ Form::token() }}
                <input type="hidden" name='user_id' value="{{$userL->id}}">
                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Nombre:
                            <input type="text" name='name' placeholder="Nombre" value="{{$userL->first_name}}" >
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Email principal:
                            <input type="email" name='email' placeholder="Email" value="{{$userL->email}}" >
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Nuevo password:
                            <input type="password" name='password' placeholder="Nuevo password" >
                        </label>
                    </div>
                </div>
                <div class="row">
                <div class="small-12 columns">
                    @if($error == "Lo sentimos pero no puedes usar un email que no hayas dado de alta (y validado) como email alternativo primero")
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
                        <button class="small round button expand" type="submit">Cambiar</button>
                    </div>
                    <div class="small-2 columns">&nbsp;</div>
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class="large-2 columns">&nbsp;</div>
    <div class="large-4 columns">
        Emails alternativos: {{count($alternativeemails)}}
        @foreach($alternativeemails as $alte)
        <div class="row">
            <div class="small-12 columns">
                <p>{{$alte->email}}</p>
            </div>
        </div>
        @endforeach
        <div class="panel">
            <form action="/agregaemail" method='post'>
                {{ Form::token() }}
                <input type="hidden" name='user_id' value="{{$userL->id}}">
                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Agrega un nuevo email por el cual quieras/puedas ser encontrado:
                            <input type="email" name='email' placeholder="Email" value="{{$userL->email}}" >
                        </label>
                    </div>
                </div>
                <div class="small-12 columns">
                    @if($error == "Por favor provee un email válido")
                    <div data-alert class="alert-box alert round">
                      {{$error}}
                      <a href="#" class="close">&times;</a>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="small-2 columns">&nbsp;</div>
                    <div class="small-8 columns">
                        <button class="small round button expand" type="submit">Agregar</button>
                    </div>
                    <div class="small-2 columns">&nbsp;</div>
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class="large-1 columns">&nbsp;</div>
</div>
    	
@stop

