@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR PLATO</h2>

<form action="/platos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de plato</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria del plato</label>
    <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Es vegetariano</label>
    <input id="vegetariano" name="vegetariano" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="text" class="form-control" tabindex="6">
  </div>
  <a href="/platos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection