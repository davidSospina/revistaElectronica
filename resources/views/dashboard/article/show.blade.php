@extends('dashboard.master')

@section('title')
    Artículo: {{$article->name}}
@endsection

@section('content')

<h1 class="text-center">Artículo: {{$article->name}}</h1>


@csrf
<div class="form-group">
    <label for="name">Título</label>
    <input readonly type="text" class="form-control" value="{{$article->name}}" name="name" id="name" placeholder="Título">
</div>

<div class="form-group">
    <label for="category_id">Categoría del artículo</label>
    <select class="form-control" name="category_id" id="category_id" disabled>
        @foreach ($categories as $title => $id)
            <option value="{{$id}}" @if ($article->category_id == $id)
                selected
            @endif>{{$title}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea readonly class="form-control" name="description" id="description" rows="3" placeholder="Descripción">{{$article->description}}</textarea>
</div>

<div class="form-group">
    <label for="review_date">Fecha de revisión</label>
    <input readonly type="text" class="form-control" value="{{$article->review_date}}" name="review_date" id="review_date">
</div>

<div class="form-group">
    <label for="state">Estado</label>
    <input readonly type="text" class="form-control" value="{{$article->state}}" name="state" id="state">
</div>

<div class="form-group">
    <label for="author_id">Autor</label>

    <select class="form-control" name="author_id" id="author_id" disabled>
        @foreach ($users as $name => $id)
            <option value="{{$id}}" @if ($article->author_id == $id)
                selected
            @endif>{{$name}}</option>
        @endforeach
    </select>
</div>

<a class="btn btn-dark btn-block mt-3 mb-3" href="{{'../../'.$article->archive_pdf }}" target="blank">Descargar PDF</a>

<a class="btn btn-info" href="{{URL::previous()}}">Regresar</a>

@endsection