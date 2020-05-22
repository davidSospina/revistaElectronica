@extends('dashboard.master')

@section('title', 'Artículo')

@section('content')

    <h1 class="text-center">Registrar Artículo</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @include('dashboard.article._form')
        <a class="btn btn-info" href="{{route('article.index')}}">Regresar</a>
    </form>

@endsection