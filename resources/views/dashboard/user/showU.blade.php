@extends('dashboard.master')

@section('title')
    {{$user->name}}
@endsection

@section('content')

<h1 class="text-center">{{$user->name}}</h1>

@csrf

<div class="form-group col-md-6 mx-auto">
    <img src="{{'../../'.$user->photo }}" class="img-fluid">
</div>

<div class="form-group">
    <label for="name">Nombre</label>
    <input readonly type="text" class="form-control" value="{{$user->name}}" name="name" id="name" placeholder="Nombre">
</div>

<div class="form-group">
    <label for="document_type">Tipo de documento</label>
    <input readonly type="text" class="form-control" value="{{$user->document_type}}" name="document_type" id="document_type">
</div>

<div class="form-group">
    <label for="document_number">Número de documento</label>
    <input readonly type="text" class="form-control" value="{{$user->document_number}}" name="document_number" id="document_number">
</div>

<div class="form-group">
    <label for="email">E-mail</label>
    <input readonly type="text" class="form-control" value="{{$user->email}}" name="email" id="email">
</div>

<div class="form-group">
    <label for="username">Nombre de usuario</label>
    <input readonly type="text" class="form-control" value="{{$user->username}}" name="username" id="username">
</div>

<div class="form-group">
    <label for="birthday_date">Fecha de nacimiento</label>
    <input readonly type="text" class="form-control" value="{{$user->birthday_date}}" name="birthday_date" id="birthday_date">
</div>

<a class="btn btn-info" href="{{route('user.edit', Auth::user())}}">Editar</a>
<a class="btn btn-info" href="{{route('dashboard')}}">Regresar</a>

@endsection