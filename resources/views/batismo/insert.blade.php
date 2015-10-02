
@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::open(array('url'=>'batismo/insert'))   !!}

        {!! Form::label('nome','Nome') !!}
        {!! Form::text('nome') !!}
        {!! Form::label('data','Data de batismo') !!}
        <input type="date" name="data" class="campos" />
        {!! $errors->first('data', '<span>:message</span>') !!}

        {!! Form::label('sexo','Sexo') !!}
        {!! Form::select('sexo', array('F' => 'Feminino', 'M' => 'Masculino','I' => 'Indefinido')) !!}
        {!! $errors->first('sexo', '<span>:message</span>') !!}

        {!! Form::label('nomePai','Nome do Pai') !!}
        {!! Form::text('nomePai') !!}

        {!! Form::label('nomeMae','Nome da M�e') !!}
        {!! Form::text('nomeMae') !!}

        {!! Form::label('condSocialPai','Condi��o Social do Pai') !!}
        {!! Form::text('condSocialPai') !!}

        {!! Form::label('condSocialMae','Condi��o Social da M�e') !!}
        {!! Form::text('condSocialMae') !!}

        {!! Form::label('moradiaPai','Moradia do Pai') !!}
        {!! Form::text('moradiaPai') !!}

        {!! Form::label('moradiaMae','Moradia da M�e') !!}
        {!! Form::text('moradiaMae') !!}

        {!! Form::label('nomePadrinho','Nome do Padrinho') !!}
        {!! Form::text('nomePadrinho') !!}

        {!! Form::label('nomeMadrinha','Nome da Madrinha') !!}
        {!! Form::text('nomeMadrinha') !!}

        {!! Form::label('condSocialPadrinho','Condi��o Social do Padrinho') !!}
        {!! Form::text('condSocialPadrinho') !!}

        {!! Form::label('condSocialMadrinha','Condi��o Social da Madrinha') !!}
        {!! Form::text('condSocialMadrinha') !!}

        {!! Form::label('moradiaPadrinho','Moradia do Padrinho') !!}
        {!! Form::text('moradiaPadrinho') !!}

        {!! Form::label('moradiaMadrinha','Moradia da Madrinha') !!}
        {!! Form::text('moradiaMadrinha') !!}

        {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}


@stop