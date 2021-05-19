@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h1>Datos del Restaurante</h1>

<table class="table table-dark table-striped mt-4">
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
        <td>
            <a href="/restaurantes/{{$restaurante->id}}/edit" class="btn btn-info">Editar</a>         
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection