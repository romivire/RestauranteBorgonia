@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR RESERVA</h2>

<form action="/reservas/{{$reserva->id}}" method="POST">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1" value="{{$reserva->fecha}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" class="form-control" tabindex="2" value="{{$reserva->hora}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad de personas</label>
    <input id="cantidad_personas" name="cantidad_personas" type="number" class="form-control" tabindex="3" value="{{$reserva->cantidad_personas}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Observacion</label>
    <input id="observacion" name="observacion" type="text" class="form-control" tabindex="4" value="{{$reserva->observacion}}">
  </div>
  <a href="/reservas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection