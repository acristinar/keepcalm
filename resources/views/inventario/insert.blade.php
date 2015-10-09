@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::open(array('url'=>'inventario/insert'))   !!}

    {!! Form::label('gastosFunerarios','Gastos Funerários') !!}
    {!! Form::text('gastosFunerarios') !!}

    {!! Form::label('bens','Bens') !!}
    {!! Form::text('bens') !!}

    {!! Form::label('dividas','Dívidas') !!}
    {!! Form::text('dividas') !!}

    {!! Form::label('divisaoBens','Divisão de Bens') !!}
    {!! Form::text('divisaoBens') !!}

    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

@stop