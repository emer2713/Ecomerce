<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('direction','Direccion') !!}
    {!! Form::text('direction', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','Telefono') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email','Correo') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-row">
    <div class="form-group col">
        {!! Form::label('image','Imagen') !!}
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" lang="es">
            <label class="custom-file-label" name="image">Seleccionar Archivo</label>
        </div>
        <small class="form-text text-muted">
            Solo archivos de imágenes de dimensiones 500x500 px.
        </small>
    </div>

</div>
<div class="form-group ">
    {!! Form::label('status ','Estado:') !!}
    {!! Form::select('status', [ 'draft' => 'Borrador', 'published' => 'Publicado'], null, ['class' => 'custom-select']) !!}
</div>
