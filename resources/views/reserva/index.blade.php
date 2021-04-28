@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h1>Reservas</h1>
<a href="{{route('reservas.create')}}" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Cantidad de personas</th>
      <th scope="col">Observacion</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($reservas as $reserva)
    <tr>
        <td>{{$reserva->id}}</td>
        <td>{{$reserva->fecha}}</td>
        <td>{{$reserva->hora}}</td>
        <td>{{$reserva->cantidad_personas}}</td>
        <td>{{$reserva->observacion}}</td>
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