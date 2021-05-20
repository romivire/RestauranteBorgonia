@extends('layouts.app')

@section('contenido')

<h2 style="color:black;" class="h2-custom">NUESTRA CARTA</h2>
<div class="album py-5 px-5 bg-custom">
    <div class="container-xl">
      <div class="row row-cols-md-4 g-4">
        @foreach ($platos as $plato)
          <div class="col-md-4" style="heigth:100%">
            <div class="card shadow-sm h-100">
              @if ($imagen=$plato->imagen)
                <?php 
                  $bytea=stream_get_contents($imagen);
                  $string=pg_unescape_bytea($bytea);
                ?>
                <img class="card-img-top" src="img/{{$string}}" width="250" height="225" style="object-fit:contain"></img>
              @else
                <img class="card-img-top" src="img/null.jpg" width="250" height="225" style="object-fit:contain"></img>
              @endif
              <div class="card-body d-flex flex-column">
                <div class="card-title" style="color:black; font-size:1.5em; height:50%; font-weight: bold">{{$plato->nombre}}</div>
                <div class="card-text" style="color:black; text-align: left">Categoria del plato: {{$plato->categoria_plato}}</div>
                <div class="card-text" style="color:black; text-align: left">Vegetariano: {{$plato->vegetariano}}</div>
                

              </div>
              <div class="card-footer">
                  <div class="d-flex justify-content-between align-items-center">
                    @hasanyrole('editor|admin')
                      <div class="btn-group">
                          <form action="{{ route('platos.destroy',$plato->id) }}" method="POST">
                            <a href="/platos/{{$plato->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form> 
                      </div>
                    @endhasanyrole
                    <strong class="text-body" style="font-size:1.5em">${{$plato->precio}}</strong>
                  </div>
                </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</div>

@endsection