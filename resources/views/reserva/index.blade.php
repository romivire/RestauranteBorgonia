@extends('layouts.app')

@section('contenido')
@if(session()->has('message'))
    <div class="alert alert-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    {{ session()->get('message') }}
    </div>
    @endif
<h2 style="color:black;" class="h2-custom">RESERVAS</h2>
<a href="{{ route('reservas.create') }}" class="btn btn-info">CREAR NUEVA RESERVA</a>

<table class="table table-dark table-striped mt-4 cover-container" style="table-layout: fixed;">
  <thead>
    <tr>
      <th scope="col" style="width:10%">ID</th>
      <th scope="col" style="width:10%">Fecha</th>
      <th scope="col" style="width:10%">Hora</th>
      <th scope="col" style="width:15%">Cantidad de personas</th>
      <th scope="col">Observacion</th>
      <th scope="col" style="width:15%"></th>
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
        <td>
         <form action="{{ route('reservas.destroy',$reserva->id) }}" method="POST">
            <a href="/reservas/{{$reserva->id}}/edit" class="btn btn-info">Editar</a>         
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