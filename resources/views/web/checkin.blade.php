@extends('layouts.web')
@section('title', 'CheckIn ')
@section('content')
    <div class="container">
        {!! Form::open(['route'=>'checkin', 'method'=>'POST','files' => true]) !!}
            <div class="card-body ">
                <div class="form-group">
                    {!! Form::label('code','Codigo de sucursal') !!}
                    {!! Form::text('code', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group mt16">
                    {!! Form::label('table','Mesa:') !!}
                    {{ Form::select('table', $tables, null, ['class'=>'form-control']) }}
                </div>

            </div>
            <div class="card-footer">
                <a class="btn btn-danger float-right" href="{{route('web.index')}}">Cancelar</a>
                <input type="submit" value="Confirmar" class="btn btn-primary">
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')

@endsection
