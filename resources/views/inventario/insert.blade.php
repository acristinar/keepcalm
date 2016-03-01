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

    {!! Form::label('nome_beneficiado','Nome do Beneficiado', array('class' => 'nome_beneficiado')) !!}
    {!! Form::text('nome_beneficiado') !!}

    {!! Form::label('bens','Bens', array('class' => 'bens')) !!}
    {!! Form::textarea('bens') !!}

    {!!Form::button('Adicionar mais beneficiados') !!}

    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

@stop