@extends('dashboard.master')

@section('title')
    Editar Artículo: {{$article->name}}
@endsection

@section('content')

    <h1 class="text-center">Editar Artículo: {{$article->name}}</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('dashboard.article._form')
        <a class="btn btn-info" href="{{route('article.index')}}">Regresar</a>
    </form>
    
@endsection