@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">EDITAR DATOS DEL RESTAURANTE</h2>
<div class="container-formulario">
<form action="/restaurantes/{{$restaurante->id}}" method="POST">
    @csrf
    @method('PATCH')
  <div class="form-group">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$restaurante->nombre}}">    
  </div>
  <div class="form-group">
    <label for="" class="form-label">Ubicacion</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="2" value="{{$restaurante->ubicacion}}">
  </div>
  <div class="form-group">
    <label for="" class="form-label">Capacidad de personas</label>
    <input id="capacidad" name="capacidad" type="number" class="form-control" tabindex="3" value="{{$restaurante->capacidad}}">
  </div>
  <div class="form-group" style="padding:25px 50px 0px 50px">
  <a href="/restaurantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</form>
</div>

@endsection