
@csrf
<div class="form-group">
    <label for="name">Título</label>
    <input type="text" class="form-control" value="{{old('name',$article->name)}}" name="name" id="name" placeholder="Título">
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="category_id">Categoría del artículo</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descripción">{{old('description',$article->description)}}</textarea>
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="review_date">Fecha de revisión</label>
    <input type="date" class="form-control" value="{{old('review_date',$article->review_date)}}" name="review_date" id="review_date">
    @error('review_date')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="state">Estado</label>
    <select class="form-control" name="state" id="state" value="{{old('state',$article->state)}}">
        <option value="1">Publicar</option>
        <option value="2">No publicar - Revisión</option>
        <option value="3">Rechazado</option>
    </select>
    @error('state')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="author_id">Autor</label>
    <select class="form-control" name="author_id" id="author_id">
        @foreach ($users as $name => $id)
            <option value="{{$id}}">{{$name}}</option>
        @endforeach
    </select>
    @error('author_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="archive_pdf">Subir PDF</label><br>
    <input type="file" name="archive_pdf" accept=".pdf" value="{{old('archive_pdf',$article->archive_pdf)}}">
    @error('archive_pdf')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<input type="submit" value="Registrar" class="btn btn-success">
