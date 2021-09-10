<div class="form-group">
    {!! Form::label('name','Número') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('branchoffice_id','Sede') !!}
    {{ Form::select('branchoffice_id', $bo, null, ['class'=>'form-control']) }}
</div>
