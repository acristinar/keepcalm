

@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::open(array('url'=>'batismo/insert'))   !!}

    {!! Form::label('ano','Ano') !!}
    {!! Form::text('ano') !!}

    {!! Form::label('data','Ano de batismo') !!}
    <input type="date" name="data" class="campos" />
    {!! $errors->first('data', '<span>:message</span>') !!}

    {!! Form::label('nomePai','Nome do Pai') !!}
    {!! Form::text('ano') !!}


    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}


@stop