
@extends('pai')


@section('content')
    <dl>

        <dt>Nome</dt>
        <dd>
            @if (empty($batismo->nome))
                N�o consta
            @else
                {{$batismo->nome}}
            @endif
        </dd>


        <dt>Data de Batismo</dt>
        <dd>
            @if (empty($batismo->data))
                N�o consta
            @else
                {{$batismo->data}}
            @endif
        </dd>

        <dt>Sexo</dt>
        <dd>
            @if (empty($batismo->sexo))
                N�o consta
            @elseif($batismo->sexo=='F')
                Feminino
            @elseif($batismo->sexo=='M')
                Masculino
            @elseif($batismo->sexo=='I')
                Indefinido
            @endif
        </dd>

        <dt>Nome do Pai</dt>
        <dd>
            @if (empty($batismo->pai))
                N�o consta
            @else
                {{$batismo->pai}}
            @endif
        </dd>

        <dt>Nome da M�e</dt>
        <dd>
            @if (empty($batismo->mae))
                N�o consta
            @else
                {{$batismo->mae}}
            @endif
        </dd>

        <dt>Condi��o Social do Pai</dt>
        <dd>
            @if (empty($batismo->condSocialPai))
                N�o consta
            @else
                {{$batismo->condSocialPai}}
            @endif
        </dd>

        <dt>Condi��o Social da M�e</dt>
        <dd>
            @if (empty($batismo->condSocialMae))
                N�o consta
            @else
                {{$batismo->condSocialMae}}
            @endif
        </dd>

        <dt>Moradia do Pai</dt>
        <dd>
            @if (empty($batismo->moradiaPai))
                N�o consta
            @else
                {{$batismo->moradiaPai}}
            @endif
        </dd>

        <dt>Moradia da M�e</dt>
        <dd>
            @if (empty($batismo->moradiaMae))
                N�o consta
            @else
                {{$batismo->moradiaMae}}
            @endif
        </dd>

        <dt>Padrinho</dt>
        <dd>
            @if (empty($batismo->padrinho))
                N�o consta
            @else
                {{$batismo->padrinho}}
            @endif
        </dd>

        <dt>Madrinha</dt>
        <dd>
            @if (empty($batismo->madrinha))
                N�o consta
            @else
                {{$batismo->madrinha}}
            @endif
        </dd>

        <dt>Condi��o Social do Padrinho</dt>
        <dd>
            @if (empty($batismo->condSocialPadrinho))
                N�o consta
            @else
                {{$batismo->condSocialPadrinho}}
            @endif
        </dd>

        <dt>Condi��o Social da Madrinha</dt>
        <dd>
            @if (empty($batismo->condSocialMadrinha))
                N�o consta
            @else
                {{$batismo->condSocialMadrinha}}
            @endif
        </dd>

        <dt>Moradia do Padrinho</dt>
        <dd>
            @if (empty($batismo->moradiaPadrinho))
                N�o consta
            @else
                {{$batismo->moradiaPadrinho}}
            @endif
        </dd>

        <dt>Moradia da Madrinhao</dt>
        <dd>
            @if (empty($batismo->moradiaMadrinha))
                N�o consta
            @else
                {{$batismo->moradiaMadrinha}}
            @endif
        </dd>

    </dl>

@stop