@csrf
@include('dashboard.partials.validation-error')

<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="{{old('publication', $post -> publication)}}">
</div>
<br>
<div class="form-group">
    <textarea class="form-control" name="publication_description" id="publication_description" cols="30" rows="10">{{old('publication_description', $post -> publication_description)}}</textarea>
</div>
<br>
<div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{url('dashboard/post')}}" class="btn btn-danger">Cancelar</a>
</div>