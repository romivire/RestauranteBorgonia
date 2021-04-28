@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR DATOS DEL RESTAURANTE</h2>

<form action="/restaurantes/{{$restaurante->id}}" method="POST">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$restaurante->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ubicacion</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="2" value="{{$restaurante->ubicacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Capacidad de personas</label>
    <input id="capacidad" name="capacidad" type="number" class="form-control" tabindex="3" value="{{$restaurante->capacidad}}">
  </div>
  <a href="/restaurantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection