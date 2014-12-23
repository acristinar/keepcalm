  @extends('pai')

  @section('content')

    @if(Session::has('success'))
        <span>{{ Session::get('success') }}</span>
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
                    <td>{{ HTML::link("testamentos/find/".$testamento->id , $testamento->nome )}}</td>
                    <td>{{$testamento->data}}</td>
                    <td>{{$testamento->tituloSocial}}</td>
                    <td>{{$testamento->testamenteiro}}</td>
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