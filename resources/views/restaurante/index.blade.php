@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">DATOS DEL RESTAURANTE</h2>
@hasanyrole('admin')
<a href="/restaurantes/1/edit" class="btn btn-info">MODIFICAR DATOS</a>
@endhasanyrole
<table class="table table-dark table-hover mt-4">
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