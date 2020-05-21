@extends('dashboard.master')

@section('title', 'Crear Categoría')

@section('content')

    <h1 class="text-center">Crear Categoría</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._formC')
        <a class="btn btn-info" href="{{route('category.index')}}">Regresar</a>
    </form>

@endsection