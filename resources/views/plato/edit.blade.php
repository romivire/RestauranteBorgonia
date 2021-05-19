@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">EDITAR PLATO</h2>
<div class="container-formulario">

  <form method="POST" action="/platos/{{ $plato->id }}" enctype="multipart/form-data">
      @csrf    
      @method('PATCH')
    <div class="form-group">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$plato->nombre}}">    
    </div>
    <div class="form-group">
      <label for="" class="form-label">Categoria del plato</label>
      <select class="form-control" id="categoria" name="categoria" type=text value="{{$plato->categoria_plato}}">
        <option value='Carne' <?php echo ($plato->categoria_plato == 'Carne')?'selected':''; ?>>Carne</option>
        <option value='Ensalada' <?php echo ($plato->categoria_plato == 'Ensalada')?'selected':''; ?>>Ensalada</option>
        <option value='Pasta' <?php echo ($plato->categoria_plato == 'Pasta')?'selected':''; ?>>Pasta</option>
        <option value='Pescado' <?php echo ($plato->categoria_plato == 'Pescado')?'selected':''; ?>>Pescado</option>
        <option value='Sandwich' <?php echo ($plato->categoria_plato == 'Sandwich')?'selected':''; ?>>Sandwich</option>
        <option value='Postre' <?php echo ($plato->categoria_plato == 'Postre')?'selected':''; ?>>Postre</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="" class="form-label">Precio</label>
      <input id="precio" name="precio" type="number" step="1"  value="{{$plato->precio}}" min="1" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" title="Numbers only" tabindex="4" required>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Es vegetariano</label>
      <select class="form-control" id="vegetariano" name="vegetariano" type=text value="{{$plato->vegetariano}}" required>
        <option>Si</option>
        <option>No</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="" class="form-label">Imagen</label>
      <input id="imagen" name="imagen" type="file" class="form-control-file" style="color:black">
    </div>
    
    <div class="form-group" style="padding:25px 50px 0px 50px">
      <a href="/platos" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>

  </form>
</div>

@endsection