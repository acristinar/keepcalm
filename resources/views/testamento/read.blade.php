
  @extends('pai')


  @section('content')
    <dl>
        <dt>Nome</dt>
            <dd>
                @if (empty($testamento->nome))
                    Não consta
                @else
                    {{$testamento->nome}}
                @endif
            </dd>

        <dt>Ano de Falecimento</dt>
            <dd>
                @if (empty($testamento->data))
                    Não consta
                @else
                    {{$testamento->data}}
                @endif


        <dt>Condição Social</dt>
            <dd>
                @if (empty($testamento->condSocial))
                    Não consta
                @else
                    {{$testamento->condSocial}}
                @endif
            </dd>

        <dt>Título Social</dt>
            <dd>
                @if (empty($testamento->tituloSocial))
                    Não consta
                @else
                    {{$testamento->tituloSocial}}
                @endif
            </dd>

        <dt>Causa da Morte</dt>
            <dd>
                @if (empty($testamento->causaMorte))
                    Não consta
                @else
                    {{$testamento->causaMorte}}
                @endif
            </dd>

        <dt>Igreja em que foi enterrado</dt>
            <dd>
                @if (empty($testamento->igrejaEnterro))
                    Não consta
                @else
                    {{$testamento->igrejaEnterro}}
                @endif
            </dd>

        <dt>Hábito no qual foi enterrado</dt>
            <dd>
                @if (empty($testamento->habitoEnterro))
                    Não consta
                @else
                    {{$testamento->habitoEnterro}}
                @endif
            </dd>

        <dt>Sexo</dt>
            <dd>
                @if (empty($testamento->sexo))
                    Não consta
                @elseif($testamento->sexo=='F')
                    Feminino
                @elseif($testamento->sexo=='M')
                    Masculino
                @elseif($testamento->sexo=='I')
                    Indefinido
                @endif
            </dd>

        <dt>Naturalidade</dt>
            <dd>
                @if (empty($testamento->naturalidade))
                    Não consta
                @else
                    {{$testamento->naturalidade}}
                @endif
            </dd>

        <dt>Ocupação</dt>
            <dd>
                @if (empty($testamento->ocupacao))
                    Não consta
                @else
                    {{$testamento->ocupacao}}
                @endif
            </dd>

        <dt>Moradia</dt>
            <dd>
                @if (empty($testamento->moradia))
                    Não consta
                @else
                    {{$testamento->moradia}}
                @endif
            </dd>

        <dt>Testamenteiro</dt>
            <dd>
                @if (empty($testamento->testamenteiro))
                    Não consta
                @else
                    {{$testamento->testamenteiro}}
                @endif
            </dd>

        <dt>Relação com o testamenteiro</dt>
            <dd>
                @if (empty($testamento->relacaoTestamenteiro))
                    Não consta
                @else
                    {{$testamento->relacaoTestamenteiro}}
                @endif
            </dd>

    </dl>

  @stop