
@extends('pai')

@section('content')

    {{isset($success)? "<span>".$success."</span>" : ""}}


    {!! Form::model($inventario, array('route' => array('inventario.update', $inventario->id))) !!}


    {!! Form::label('gastosFunerários','Gastos Funerários') !!}
    {!! Form::text('gastosFunerários') !!}

    {!! Form::label('bens','Bens') !!}
    {!! Form::text('bens') !!}

    {!! Form::label('dividas','Dívidas') !!}
    {!! Form::text('dividas') !!}

    {!! Form::label('divisaoBens','Divisão de Bens') !!}
    {!! Form::text('divisaoBens') !!}

    {!! Form::submit('Alterar') !!}

    {!! Form::close() !!}


@stop