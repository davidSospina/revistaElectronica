@extends('dashboard.master')

@section('title', 'Bienvenida Revista electrónica')

@section('content')

    @include("dashboard.partials.infoAlerts")

    <div class="card text-center">
        <div class="card-body">
          <h1 class="card-title">¡Hola!</h1>
          <h3 class="card-text">¿Qué deseas ver?</h3>

          <a class="btn btn-primary mt-3 mb-3" href="{{route('article.index')}}">Artículos</a> <br>
          <a class="btn btn-primary mt-3 mb-3" href="{{route('category.index')}}">Categorías</a>
          <a class="btn btn-primary mt-3 mb-3" href="{{route('user.show', Auth::user())}}">Información personal</a>
        </div>
    </div>

@endsection