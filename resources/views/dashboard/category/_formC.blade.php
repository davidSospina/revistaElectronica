
@csrf
<div class="form-group">
    <label for="title">Título</label>
    <input type="text" class="form-control" value="{{old('title',$category->title)}}" name="title" id="title" placeholder="Título">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <input type="text" class="form-control" value="{{old('description',$category->description)}}" name="description" id="description" placeholder="Descripción">
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<input type="submit" value="Enviar" class="btn btn-success">
