
@csrf
<div class="form-group">
    <label for="name">Título</label>
    <input type="text" class="form-control" value="{{old('name',$article->title)}}" name="name" id="name" placeholder="Título">
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
</div>

<div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descripción">{{old('description',$article->description)}}</textarea>
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="review_date">Fecha de revisión</label>
    <input type="date" class="form-control" value="{{old('review_date',$article->review_date)}}" name="review_date" id="review_date" placeholder="Url">
    @error('review_date')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="state">Estado</label>
    <select class="form-control" name="state" id="state">
        <option>Publicar</option>
        <option>No publicar - Revisión</option>
        <option>Rechazado</option>
    </select>
</div>

<div class="form-group">
    <label for="author_id">Autor</label>
    <select class="form-control" name="author_id" id="author_id">
        @foreach ($users as $name => $id)
            <option value="{{$id}}">{{$name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="archive_pdf">Subir PDF</label><br>
    <input type="file" name="archive_pdf" accept=".pdf">
</div>

<input type="submit" value="Registrar" class="btn btn-success">
