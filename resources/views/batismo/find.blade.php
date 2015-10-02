@extends('pai')

@section('content')

    @if(isset($success))
        <span>{{ $success }}</span>
    @endif

    <table>
        <thead>
        <tr>
            <td>Nome</td>
            <td>Data</td>
            <td>Sexo</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($batismos as $batismo)
            <tr>
                <td><a href="find/{{$batismo->id}}">{{$batismo->nome}}</a></td>
                <td>{{$batismo->data}}</td>
                <td>{{$batismo->sexo}}</td>
                <td>
                    <a href="update/{{$batismo->id}}" >
                        <button>Alterar</button>
                    </a>
                </td>
                <td>
                    <a href="erase/{{$batismo->id}}" >
                        <button>Apagar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop