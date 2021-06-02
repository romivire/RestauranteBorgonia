@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">CREAR RESERVA</h2>
<div class="container-formulario">
  <form action="/reservas" method="POST">
    @csrf
    <div class="form-group">
      <label for="" class="form-label">Fecha (*)</label>
      <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1" required>
      <div class="invalid-feedback">Ingrese una fecha valida</div>    
    </div>
    <div class="form-group">
      <label for="" class="form-label">Hora (*)</label>
      <select class="form-control" id="hora" name="hora" type="time" required>
        <option>19:00</option>
        <option>19:30</option>
        <option>20:00</option>
        <option>20:30</option>
        <option>21:00</option>
        <option>21:30</option>
      </select>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Cantidad de personas (*)</label>
      <input id="cantidad_personas" name="cantidad_personas" type="number" class="form-control" value="1" min="1" tabindex="3" required>
    </div>  
    <div class="form-group">
      <label for="" class="form-label">Observacion</label>
      <input id="observacion" name="observacion" type="text" class="form-control" size="47" tabindex="4" maxlength="150">
    </div>
    <small style="color:red;font-weight: bold;">(*) Campos Obligatorios</small>
    <div class="form-group" style="padding:25px 50px 0px 50px">
        <a href="/reservas" class="btn btn-secondary" tabindex="5">Cancelar</a>  
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
  </form>
</div>

@endsection