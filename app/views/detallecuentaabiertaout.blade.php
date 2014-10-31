@extends('layouts.iniciolayoutin')
@section('content')

<div class="row">
  <!-- detalles -->
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th width="80">{{$usuarioA->first_name}} Puso</th>
          <th width="300">
            @if($cuentaAbierta->balance > 0) 
              Al momento {{$usuarioB->first_name}} le debe ${{$cuentaAbierta->balance}} a {{$usuarioA->first_name}}
            @else
              Al momento {{$usuarioA->first_name}} le debe ${{$cuentaAbierta->balance*(-1)}} a {{$usuarioB->first_name}}
            @endif
            </th>
          <th width="80">{{$usuarioB->first_name}} Puso</th>
        </tr>
      </thead>
      <tbody>
      @foreach($cuentaAbierta->detalles5 as $detalle)
        <tr>
          <td><?php echo ($detalle->direction > 0) ? "$".$detalle->ammount : ""; ?></td>
          <td>{{substr($detalle->created_at, 0, -9)}} {{$detalle->description}}</td>
          <td><?php echo ($detalle->direction < 0) ? "$".$detalle->ammount : ""; ?></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
    	
@stop