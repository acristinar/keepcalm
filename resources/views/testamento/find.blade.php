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
                <td>Título Social</td>
                <td>Testamenteiro</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($testamentos as $testamento)
                <tr>
                    <td><a href="find/{{$testamento->id}}">{{$testamento->nome}}</a></td>
                    <td>{{$testamento->data}}</td>
                    <td>{{$testamento->tituloSocial}}</td>
                    <td>{{$testamento->testamenteiro}}</td>
                    <td>
                        <a href="update/{{$testamento->id}}" >
                            <button>Alterar</button>
                        </a>
                    </td>
                    <td>
                        <a href="erase/{{$testamento->id}}" >
                            <button>Apagar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  @stop