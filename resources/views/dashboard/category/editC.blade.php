@extends('dashboard.master')

@section('title')
    Editar categoría: {{$category->title}}
@endsection

@section('content')
    
    <h1 class="text-center">Editar categoría: {{$category->title}}</h1>

    @include('dashboard.partials.validation-error')

    <form action="{{route('category.update', $category->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.category._formC')
        <a class="btn btn-info" href="{{route('category.index')}}">Regresar</a>
    </form>

@endsection