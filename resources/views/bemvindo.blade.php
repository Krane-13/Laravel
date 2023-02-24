<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Bem-Vindo</title>
</head>
<body>

    {{--<h1>Bem-vindo, {{$apelido_nome}}</h1>
     <h2>Sobrenome: {{$sobrenome}}</h2>
    <h2>Idade: {{$idade}}</h2>
    <h2>Aniversario: {{$aniver}}</h2> --}}

    {{-- BLADE --}}
    {{-- <h2> 1+1 é: {{1+1}}</h2>
    <h3> o CÓDIGO É: {{--FUNCAO()</h3>
    <P> cÓDIGO html: {{$html}}</P>
    <p>Código HTML interpretado: {!! $html !!}</p> --}}

    {{-- Condicionais --}}
    {{-- <h1>{{$apelido_nome == 'Matheus' ? 'Sim': 'Não'}}</h1>
    <span>O usuário é Alessandro? </span>
    @if($apelido_nome == 'Alessandro')
        <h1>É Alessandro</h1>
    @elseif($apelido_nome =='Matheus')
        <h1>É Matheus</h1>
    @else
        <h2>Não é nenhum dos dois</h2>
    @endif --}}

    {{-- Laços de Repetição --}}
    {{-- @for($i=1; $i<=10; $i++)
        <p>Mensagen de <b> Fulano</b></p>
        <p> Esta é uma mensagem qualquer</p>
        <hr/>
    @endfor --}}

    {{-- Componentes --}}
    {{-- @foreach($ingredientes as $ing)
        <p>{{$ing}} -
        @component('components.botao')
            @slot('href')
            http://google.com.br
            @endslot
            @slot('cor')
            blue
            @endslot
            Editar
        @endcomponent

        @component('components.botao')
            @slot('href')
            http://9gag.com
            @endslot
            @slot('cor')
            red
            @endslot
            Deletar
        @endcomponent
        </p>
    @endforeach --}}

    {{-- EXE1 --}}

    <div style="
    display:flex;
    flex-direction:row"
>
    @foreach($pessoas as $p)

        {{-- @component('components.avatar')
            @slot('image')
                {{$p['image']}}
            @endslot
            @slot('nome')
                {{$p['nome']}}
            @endslot
            @slot('idade')
                {{$p['idade']}}
            @endslot
            @slot('birth')
                {{$p['birth']}}
            @endslot
        @endcomponent --}}

        @include('components.avatar', $p)

    @endforeach


</body>
</html>
