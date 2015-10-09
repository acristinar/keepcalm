@extends('pai')

@section('content')

    <?php $success = Session::get('success'); ?>
    {{$success or '' }}

    <table>
        <thead>
        <tr>
            <td>Gastos Funerários</td>
            <td>Bens</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($inventarios as $inventario)
            <tr>
                <td><a href="find/{{$inventario->id}}">{{$inventario->gastosFunerarios}}</a></td>
                <td>{{$inventario->bens}}</td>
                <td>
                    <a href="update/{{$inventario->id}}" >
                        <button>Alterar</button>
                    </a>
                </td>
                <td>
                    <a href="erase/{{$inventario->id}}" >
                        <button>Apagar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop