@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::open(array('url'=>'inventario/insert'))   !!}

    {!! Form::label('nome','Nome') !!}
    {!! Form::text('nome') !!}

    {!! Form::label('data','Data do inventário') !!}
    <input type="date" name="data" class="campos" />
    {!! $errors->first('data', '<span>:message</span>') !!}

    {!! Form::label('gastosFunerarios','Gastos Funerários') !!}
    {!! Form::text('gastosFunerarios') !!}

    {!! Form::label('dividas','Dívidas') !!}
    {!! Form::text('dividas') !!}

    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

@stop