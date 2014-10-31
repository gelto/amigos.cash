@extends('layouts.iniciolayoutin')
@section('content')
    
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
                    <input type="text" name='nombredeamigo' placeholder="¿Cómo le dices a tu amigo?" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="email" name='emaildeamigo' placeholder="¿qué email conoces de tu amigo?" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <input type="number" name='cantidad' placeholder="Cantidad en pesos" value="" required>
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
                    @if($error != "")
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
                    <button class="large round button expand" type="submit">Guardar</button>
                </div>
                <div class="small-2 columns">&nbsp;</div>
            </div>
        </form>
    </div>
    <div class="large-4 columns">&nbsp;</div>
</div>

    	
@stop

