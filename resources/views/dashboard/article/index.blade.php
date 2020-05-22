@extends('dashboard.master')

@section('title', 'Artículos')

@section('content')

<h1 class="text-center">Artículos registrados</h1>
@auth
    <a class="btn btn-success btn-block mt-3 mb-3" href="{{route('article.create')}}">Registrar artículo</a>
@else 
<br>
@endauth
<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Título
            </td>
            <td>
                Categoría
            </td>
            <td>
                Estado
            </td>
            <td>
                Autor
            </td>
            <td>
                Opciones
            </td>
        </tr>
    </thead>
    <tbody>
        @auth
            @foreach($articles as $article)
                <tr>
                    <td>
                        {{$article->id}}
                    </td>
                    <td>
                        {{$article->name}}
                    </td>
                    <td>
                        @if ($article->category_id  == 1)
                           {{"Desarrollo"}} 
                        @else
                            @if ($article->category_id  == 2)
                                {{"Fotografia"}} 
                            @else
                                @if ($article->category_id  == 3)
                                    {{"Investigación"}} 
                                @else
                                    @if ($article->category_id  == 4)
                                        {{"Internet de las cosas"}}
                                    @else
                                        @if ($article->category_id  == 5)
                                            {{"Cultura general"}}
                                        @else
                                            @if ($article->category_id  == 6)
                                                {{"Inteligencia artificial"}} 
                                            @else
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        {{$article->state}}
                    </td>
                    <td>
                        @if ($article->author_id == 1)
                            {{"David Salgado Ospina"}}
                        @else
                            {{"Luisa Morales"}}
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{route('article.show', $article->id)}}">Ver</a>

                        @auth
                            <a class="btn btn-sm btn-warning" href="{{route('article.edit', $article->id)}}">Editar</a>
                            <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$article->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
                        @else
                        @endauth
                            
                    </td>
                </tr>
            @endforeach
        @else 
            @foreach($articles as $article)
                    
                @if($article->state == "publish")
                    <tr>
                        <td>
                            {{$article->id}}
                        </td>
                        <td>
                            {{$article->name}}
                        </td>
                        <td>
                            @if ($article->category_id  == 1)
                                {{"Desarrollo"}} 
                                @else
                                    @if ($article->category_id  == 2)
                                        {{"Fotografia"}} 
                                    @else
                                        @if ($article->category_id  == 3)
                                            {{"Investigación"}} 
                                        @else
                                            @if ($article->category_id  == 4)
                                                {{"Internet de las cosas"}}
                                            @else
                                                @if ($article->category_id  == 5)
                                                    {{"Cultura general"}}
                                                @else
                                                    @if ($article->category_id  == 6)
                                                        {{"Inteligencia artificial"}} 
                                                    @else
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                        </td>
                        <td>
                            {{$article->state}}
                        </td>
                        <td>
                            @if ($article->author_id == 1)
                            {{"David Salgado Ospina"}}
                        @else
                            {{"Luisa Morales"}}
                        @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('article.show', $article->id)}}">Ver</a>

                            @auth
                                <a class="btn btn-sm btn-warning" href="{{route('article.edit', $article->id)}}">Editar</a>
                                <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$article->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
                            @else
                            @endauth
                                
                        </td>
                    </tr>
                @else
                    
                @endif
            @endforeach
        @endauth
        
    </tbody>
</table>
{{$articles->links()}}

<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Desea eliminar el artículo seleccionado?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('article.destroy', 0)}}" data-action="{{route('article.destroy', 0)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>

<script>
    window.onload=function(){
        $('#eliminarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            action = $('#formDelete').attr('data-action').slice(0,-1);
            var modal = $(this);
            $('#formDelete').attr('action', action+id);
            modal.find('.modal-title').text('Estas eliminando el Artículo: ' + id);
        })
    }
</script>

@endsection
