
@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::model($batismo, array('route' => array('batismo.update', $batismo->id))) !!}

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

        {!! Form::label('nomeMae','Nome da Mãe') !!}
        {!! Form::text('nomeMae') !!}

        {!! Form::label('condSocialPai','Condição Social do Pai') !!}
        {!! Form::text('condSocialPai') !!}

        {!! Form::label('condSocialMae','Condição Social da Mãe') !!}
        {!! Form::text('condSocialMae') !!}

        {!! Form::label('moradiaPai','Moradia do Pai') !!}
        {!! Form::text('moradiaPai') !!}

        {!! Form::label('moradiaMae','Moradia da Mãe') !!}
        {!! Form::text('moradiaMae') !!}

        {!! Form::label('nomePadrinho','Nome do Padrinho') !!}
        {!! Form::text('nomePadrinho') !!}

        {!! Form::label('nomeMadrinha','Nome da Madrinha') !!}
        {!! Form::text('nomeMadrinha') !!}

        {!! Form::label('condSocialPadrinho','Condição Social do Padrinho') !!}
        {!! Form::text('condSocialPadrinho') !!}

        {!! Form::label('condSocialMadrinha','Condição Social da Madrinha') !!}
        {!! Form::text('condSocialMadrinha') !!}

        {!! Form::label('moradiaPadrinho','Moradia do Padrinho') !!}
        {!! Form::text('moradiaPadrinho') !!}

        {!! Form::label('moradiaMadrinha','Moradia da Madrinha') !!}
        {!! Form::text('moradiaMadrinha') !!}

        {!! Form::submit('Alterar') !!}

    {!! Form::close() !!}


@stop