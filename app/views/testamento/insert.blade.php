

  @extends('pai')


  @section('content')
    {{ Form::open(array('url'=>'testamentos/insert'))   }}

        {{ Form::label('nome','Nome') }}
        {{ Form::text('nome') }}

        {{ Form::label('data','Ano de falecimento') }}
        <input type="date" name="data" class="campos" />

        {{ Form::label('condSocial','Condição Social') }}
                {{ Form::text('condSocial') }}

        {{ Form::label('tituloSocial','Título') }}
                {{ Form::text('tituloSocial') }}

        {{ Form::label('causaMorte','Causa da Morte') }}
                {{ Form::text('causaMorte') }}

        {{ Form::label('igrejaEnterro','Igreja em que foi enterrado') }}
                {{ Form::text('igrejaEnterro') }}

        {{ Form::label('habitoEnterro','Hábito no qual foi enterrado') }}
                {{ Form::text('habitoEnterro') }}

        {{ Form::label('sexo','Sexo') }}
                {{ Form::select('sexo', array('F' => 'Feminino', 'M' => 'Masculino','I' => 'Indefinido')); }}

        {{ Form::label('naturalidade','Naturalidade') }}
                {{ Form::text('naturalidade') }}

        {{ Form::label('ocupacao','Ofício/ocupação') }}
                        {{ Form::text('ocupacao') }}

        {{ Form::label('moradia','Moradia') }}
                        {{ Form::text('moradia') }}

        {{ Form::label('testamenteiro','Testamenteiro') }}
                        {{ Form::text('testamenteiro') }}

        {{ Form::label('relacaoTestamenteiro','Relação com o testamenteiro') }}
                        {{ Form::text('relacaoTestamenteiro') }}


        {{ Form::submit('Enviar') }}

    {{ Form::close() }}


  @stop