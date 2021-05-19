@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h1>Platos</h1>
<a href="{{route('platos.create')}}" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de plato</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria de Plato</th>
      <th scope="col">Vegetariano</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($platos as $plato)
    <tr>
        <td>{{$plato->id}}</td>
        <td>{{$plato->nombre}}</td>
        <td>{{$plato->tipo_plato}}</td>
        <td>{{$plato->precio}}</td>
        <td>{{$plato->categoria_plato}}</td>
        <td>{{$plato->vegetariano}}</td>
        <td>{{$plato->imagen}}</td>
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