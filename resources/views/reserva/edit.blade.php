@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">EDITAR RESERVA</h2>
<div class="container-formulario">
  <form method="POST" action="/reservas/{{$reserva->id}}" enctype="multipart/form-data">
    @csrf    
    <div class="form-group">
      <label for="" class="form-label">Fecha (*)</label>
      <input id="fecha" name="fecha" type="date" class="form-control" tabindex="1" value="{{$reserva->fecha}}" required>    
    </div>
    <div class="form-group">
        <?php 
          $hora=date('H:i',strtotime($reserva->hora));
        ?>
      <label for="" class="form-label">Hora (*)</label>
      <select class="form-control" id="hora" name="hora" type="time" value="{{$hora}}" required>
        <option value='19:00' <?php echo ($hora == '19:00')?'selected':''; ?>>19:00</option>
        <option value='19:30' <?php echo ($hora == '19:30')?'selected':''; ?>>19:30</option>
        <option value='20:00' <?php echo ($hora == '20:00')?'selected':''; ?>>20:00</option>
        <option value='20:30' <?php echo ($hora == '20:30')?'selected':''; ?>>20:30</option>
        <option value='21:00' <?php echo ($hora == '21:00')?'selected':''; ?>>21:00</option>
        <option value='21:30' <?php echo ($hora == '21:30')?'selected':''; ?>>21:30</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="" class="form-label">Cantidad de personas (*)</label>
      <input id="cantidad_personas" name="cantidad_personas" type="number" class="form-control" tabindex="3" min="1" value="{{$reserva->cantidad_personas}}" required>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Observacion</label>
      <input id="observacion" name="observacion" type="text" class="form-control" size="47" tabindex="4" maxlength="150" value="{{$reserva->observacion}}">
    </div>
    <div class="form-group">
      <label for="" class="form-label">Estado(*)</label>
      <select class="form-control" id="estado" name="estado" type="text" value="{{$reserva->estado}}" required>
        <option value='Confirmada' <?php echo ($hora == 'Confirmada')?'selected':''; ?>>Confirmada</option>
        <option value='Pendiente' <?php echo ($hora == 'Pendiente')?'selected':''; ?>>Pendiente</option>
      </select>
    </div>
    <small style="color:red;font-weight: bold;">(*) Campos Obligatorios</small>
    <div class="form-group" style="padding:25px 50px 0px 50px">
        <a href="/reservas" class="btn btn-secondary" tabindex="5">Cancelar</a>  
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
  </form>
</div>

@endsection