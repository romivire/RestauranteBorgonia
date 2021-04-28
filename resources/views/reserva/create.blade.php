@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR RESERVA</h2>

<form action="/reservas" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad de personas</label>
    <input id="cantidad_personas" name="cantidad_personas" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Observacion</label>
    <input id="observacion" name="observacion" type="text" class="form-control" tabindex="4">
  </div>
  <a href="/reservas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection