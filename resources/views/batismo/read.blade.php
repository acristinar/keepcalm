
@extends('pai')


@section('content')
    <dl>

        <dt>Nome</dt>
        <dd>
            @if (empty($batismo->nome))
                Não consta
            @else
                {{$batismo->nome}}
            @endif
        </dd>


        <dt>Data de Batismo</dt>
        <dd>
            @if (empty($batismo->data))
                Não consta
            @else
                {{$batismo->data}}
            @endif
        </dd>

        <dt>Sexo</dt>
        <dd>
            @if (empty($batismo->sexo))
                Não consta
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
                Não consta
            @else
                {{$batismo->pai}}
            @endif
        </dd>

        <dt>Nome da Mãe</dt>
        <dd>
            @if (empty($batismo->mae))
                Não consta
            @else
                {{$batismo->mae}}
            @endif
        </dd>

        <dt>Condição Social do Pai</dt>
        <dd>
            @if (empty($batismo->condSocialPai))
                Não consta
            @else
                {{$batismo->condSocialPai}}
            @endif
        </dd>

        <dt>Condição Social da Mãe</dt>
        <dd>
            @if (empty($batismo->condSocialMae))
                Não consta
            @else
                {{$batismo->condSocialMae}}
            @endif
        </dd>

        <dt>Moradia do Pai</dt>
        <dd>
            @if (empty($batismo->moradiaPai))
                Não consta
            @else
                {{$batismo->moradiaPai}}
            @endif
        </dd>

        <dt>Moradia da Mãe</dt>
        <dd>
            @if (empty($batismo->moradiaMae))
                Não consta
            @else
                {{$batismo->moradiaMae}}
            @endif
        </dd>

        <dt>Padrinho</dt>
        <dd>
            @if (empty($batismo->padrinho))
                Não consta
            @else
                {{$batismo->padrinho}}
            @endif
        </dd>

        <dt>Madrinha</dt>
        <dd>
            @if (empty($batismo->madrinha))
                Não consta
            @else
                {{$batismo->madrinha}}
            @endif
        </dd>

        <dt>Condição Social do Padrinho</dt>
        <dd>
            @if (empty($batismo->condSocialPadrinho))
                Não consta
            @else
                {{$batismo->condSocialPadrinho}}
            @endif
        </dd>

        <dt>Condição Social da Madrinha</dt>
        <dd>
            @if (empty($batismo->condSocialMadrinha))
                Não consta
            @else
                {{$batismo->condSocialMadrinha}}
            @endif
        </dd>

        <dt>Moradia do Padrinho</dt>
        <dd>
            @if (empty($batismo->moradiaPadrinho))
                Não consta
            @else
                {{$batismo->moradiaPadrinho}}
            @endif
        </dd>

        <dt>Moradia da Madrinhao</dt>
        <dd>
            @if (empty($batismo->moradiaMadrinha))
                Não consta
            @else
                {{$batismo->moradiaMadrinha}}
            @endif
        </dd>

    </dl>

@stop