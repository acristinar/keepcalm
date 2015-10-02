
@extends('pai')

@section('content')

    {!! isset($success)? "<span>".$success."</span>" : "" !!}

    {!! Form::open(array('url'=>'batismo/insert'))   !!}

        {!! Form::label('ano','Ano') !!}
        {!! Form::text('ano') !!}

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

        {!! Form::label('condSocialPais','Condição Social dos Pais') !!}
        {!! Form::text('condSocialPais') !!}

        {!! Form::label('moradiaPais','Moradia dos Pais') !!}
        {!! Form::text('moradiaPais') !!}

        {!! Form::label('nomePadrinho','Nome do Padrinho') !!}
        {!! Form::text('nomePadrinho') !!}

        {!! Form::label('nomeMadrinha','Nome da Madrinha') !!}
        {!! Form::text('nomeMadrinha') !!}

        {!! Form::label('condSocialPadrinhos','Condição Social dos Padrinhos') !!}
        {!! Form::text('condSocialPadrinhos') !!}

        {!! Form::label('moradiaPadrinhos','Moradia dos Padrinhos') !!}
        {!! Form::text('moradiaPadrinhos') !!}

        {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}


@stop