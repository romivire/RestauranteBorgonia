@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR PLATO</h2>

<form method="POST" action="/platos/{{ $plato->id }}">
    @csrf    
    @method('PATCH')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$plato->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de plato</label>
    <input id="tipo" name="tipo" type="text" class="form-control" value="{{$plato->tipo_plato}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria del plato</label>
    <input id="categoria" name="categoria" type="text" class="form-control" value="{{$plato->categoria_plato}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$plato->precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Es vegetariano</label>
    <input id="vegetariano" name="vegetariano" type="text" class="form-control" value="{{$plato->vegetariano}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="text" class="form-control" value="{{$plato->imagen}}">
  </div>
  <a href="/platos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection