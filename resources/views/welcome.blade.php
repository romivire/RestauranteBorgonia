
@extends('layouts.app')

@section('contenido')
    @if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session()->get('message') }}
        </div>
    @endif
    
    <div class="text-welcome">
        <h1>La Borgonia</h1>
        <p class="lead">Disfruta de una experiencia gastronomica</p>
        <p class="lead">
            <a href="{{ route('reservas.create') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white" style="color:black">Hacer una reserva</a>
        </p>
    </div>

@endsection