@extends('dashboard.master')

@section('title')
    Editar infromación personal
@endsection

@section('content')

    <h1 class="text-center">Editar infromación personal</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('dashboard.user._formU')
        <a class="btn btn-info" href="{{route('user.show', $user)}}">Regresar</a>
    </form>
    
@endsection