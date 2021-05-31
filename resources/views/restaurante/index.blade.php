@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">DATOS DEL RESTAURANTE</h2>

<table class="table table-dark table-striped mt-4 cover-container">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Capacidad</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($restaurantes as $restaurante)
      <tr>
          <td>{{$restaurante->id}}</td>
          <td>{{$restaurante->nombre}}</td>
          <td>{{$restaurante->ubicacion}}</td>
          <td>{{$restaurante->capacidad}}</td>       
      </tr>
    @endforeach    
  </tbody>       
</table>

@endsection 