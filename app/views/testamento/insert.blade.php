

  @extends('pai')


  @section('content')
    {{ Form::open(array('url'=>'testamentos/insert'))   }}

        {{ Form::label('nome','Nome') }}
        {{ Form::text('nome') }}

        <input type="date" name="data" class="campos" />

        {{ Form::label('condSocial','Condição Social') }}
                {{ Form::text('condSocial') }}

        {{ Form::label('tituloSocial','Título') }}
                {{ Form::text('tituloSocial') }}

        {{ Form::submit('Enviar') }}

    {{ Form::close() }}


  @stop