@extends('layouts.app')

@section('contenido')
@if(session()->has('message'))
    <div class="alert alert-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    {{ session()->get('message') }}
    </div>
    @endif
<h2 style="color:black;" class="h2-custom">NUESTRA CARTA</h2>
<a href="{{route('platos.create')}}" class="btn btn-info">CREAR NUEVO PLATO</a>
<table class="table table-dark table-striped mt-4 cover-container" style="table-layout: fixed;">
  <thead>
    <tr>
      <th scope="col" style="width:10%">ID</th>
      <th scope="col" style="width:20%">Nombre</th>
      <th scope="col" style="width:10%">Categoria</th>
      <th scope="col" style="width:10%">Precio</th>
      <th scope="col" style="width:10%">Vegetariano</th>
      <th scope="col" style="width:20%">Imagen</th>
      <th scope="col" style="width:15%"></th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($platos as $plato)
        <tr style="height: 100%;">
        <td>{{$plato->id}}</td>
        <td>{{$plato->nombre}}</td>
        <td>{{$plato->categoria_plato}}</td>
        <td>{{$plato->precio}}</td>
        <td>{{$plato->vegetariano}}</td>
        <td> @if ($imagen=$plato->imagen)
              <?php 
                $bytea=stream_get_contents($imagen);
                $string=pg_unescape_bytea($bytea);
              ?>

              <img src="img/{{$string}}" width="auto" height="100"></img>
              @else
              <img src="img/null.jpg" width="auto" height="100"></img>
              @endif</td>
        <td>
         <form action="{{ route('platos.destroy',$plato->id) }}" method="POST">
            <a href="/platos/{{$plato->id}}/edit" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection