  @extends('pai')

  @section('content')

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
                    <td>{{$testamento->nome}}</td>
                    <td>{{$testamento->data}}</td>
                    <td>{{$testamento->tituloSocial}}</td>
                    <td>{{$testamento->testamenteiro}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

  @stop