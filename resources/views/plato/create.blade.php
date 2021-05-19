@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">CREAR PLATO</h2>
<div class="container-formulario">
  <form action="/platos" method="POST" enctype="multipart/form-data"> 
      @csrf
    <div class="form-group">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>    
    </div>
    <div class="form-group">
      <label for="" class="form-label">Categoria del plato</label>
      <select class="form-control" id="categoria" name="categoria" type=text>
        <option>Carne</option>
        <option>Ensalada</option>
        <option>Pasta</option>
        <option>Pescado</option>
        <option>Sandwich</option>
        <option>Postre</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="" class="form-label">Precio</label>
      <input id="precio" name="precio" type="number" step="1" value="0" min="1" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" title="Numbers only" tabindex="4" required>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Es vegetariano</label>
      <select class="form-control" id="vegetariano" name="vegetariano" type=text required>
        <option>Si</option>
        <option>No</option>
      </select>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Imagen</label>
      <input id="imagen" name="imagen" type="file" class="form-control-file" tabindex="6" style="color:black">
    </div>
  
    <div class="form-group" style="padding:25px 50px 0px 50px">
      <a href="/platos" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>

  </form>
</div>

@endsection