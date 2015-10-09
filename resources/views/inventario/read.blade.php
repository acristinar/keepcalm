
@extends('pai')


@section('content')
    <dl>
        <dt>Gastos Funerários</dt>
        <dd>
            @if (empty($inventario->gastosFunerarios))
                Não consta
            @else
                {{$inventario->gastosFunerarios}}
            @endif
        </dd>

        <dt>Bens</dt>
        <dd>
            @if (empty($inventario->bens))
                Não consta
        @else
            {{$inventario->bens}}
        @endif


        <dt>Dívidas</dt>
        <dd>
            @if (empty($inventario->dividas))
                Não consta
            @else
                {{$inventario->dividas}}
            @endif
        </dd>

        <dt>Divisão de Bens</dt>
        <dd>
            @if (empty($inventario->divisaoBens))
                Não consta
            @else
                {{$inventario->divisaoBens}}
            @endif
        </dd>
    </dl>

@stop