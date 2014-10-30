@extends('layouts.iniciolayoutin')
@section('content')
    
<div class="row">
    <div class="large-1 columns">&nbsp;</div>
    <div class="large-4 columns">
        @foreach($cuentasCreadas as $cc)
        <div class="panel">
            <?php 
                $nickname = Alternativenickname::where('user_id', '=', $cc->usuarioB->id)->where('user_id_origen', '=', $usuarioL->id)->get();
            ?>
            <form action="/cambiaamigo" method='post'>
                {{ Form::token() }}
                <input type="hidden" name='cuenta_id' value="{{$cc->id}}">
                <input type="hidden" name='amigo_id' value="{{$cc->usuarioB->id}}">
                <div class="row">
                    <div class="small-12 columns">
                        <h5>{{$cc->usuarioB->first_name}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <input type="text" name='nickname' placeholder="Apodo" value="{{$nickname[0]->nickname}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <input type="email" name='email' placeholder="Email" value="{{$cc->usuarioB->email}}" required>
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
        </div>
        <br>
        @endforeach
    </div>
    <div class="large-2 columns">&nbsp;<br><br><br><br></div>
    <div class="large-4 columns">
        @foreach($cuentasInvitado as $ci)
        <div class="panel">
            <?php 
                $nicknameo = ""; 
                $nickname = Alternativenickname::where('user_id', '=', $ci->usuarioA->id)->where('user_id_origen', '=', $usuarioL->id)->get();
                if(isset($nickname[0])){
                    $nicknameo = $nickname[0]->nickname;
                }
            ?>
            <form action="/cambiaamigo" method='post'>
                {{ Form::token() }}
                <input type="hidden" name='cuenta_id' value="{{$ci->id}}">
                <input type="hidden" name='amigo_id' value="{{$ci->usuarioA->id}}">
                <div class="row">
                    <div class="small-12 columns">
                        <h5>{{$ci->usuarioA->first_name}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <input type="text" name='nickname' placeholder="Apodo" value="{{$nicknameo}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <input type="email" name='email' placeholder="Email" value="{{$ci->usuarioA->email}}" required>
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
        </div>
        <br>
        @endforeach
    </div>
    <div class="large-1 columns">&nbsp;</div>
</div>
    	
@stop

