@extends('layouts.app')

@section('contenido')
<h2 style="color:black;" class="h2-custom">NUESTRA CARTA</h2>
<a href="{{route('platos.create')}}" class="btn btn-info">CREAR NUEVO PLATO</a>
<table class="table table-dark table-hover mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Precio</th>
      <th scope="col">Vegetariano</th>
      <th scope="col">Imagen</th>
      <th scope="col"></th>
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
        <td> 
          @if ($plato->imagen)
                <?php 
                    $file=fopen(public_path("img/{$plato->id}.jpg"),"w");
                    fwrite($file, base64_decode(stream_get_contents($plato->imagen)));
                ?>
                <img src="img/{{$plato->id}}.jpg" width="auto" height="100"></img>
          @else
                <img src="img/null.jpg" width="auto" height="100"></img>
          @endif
        </td>
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