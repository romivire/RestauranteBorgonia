@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">RESERVAS</h2>
<a href="{{ route('reservas.create') }}" class="btn btn-info">CREAR NUEVA RESERVA</a>

<table class="table table-dark table-hover mt-4">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Fecha</th>
      <th scope="col" >Hora</th>
      <th scope="col" >Cantidad de personas</th>
      <th scope="col">Observacion</th>
      <th scope="col">Estado</th>
      <th scope="col" ></th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($reservas as $reserva)
    <?php 
        $hora=date('H:i',strtotime($reserva->hora));
        $fecha=date('d/m/y',strtotime($reserva->fecha));
    ?>
    <tr style="height: 100%;">
        <td>{{$reserva->id}}</td>
        <td>{{$fecha}}</td>
        <td>{{$hora}}</td>
        <td>{{$reserva->cantidad_personas}}</td>
        <td style="width: 100px; overflow: hidden;">{{$reserva->observacion}}</td>
        <td>{{$reserva->estado}}</td>
        <td>
         <form action="{{ route('reservas.destroy',$reserva->id) }}" method="POST">
            <a href="/reservas/{{$reserva->id}}" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection