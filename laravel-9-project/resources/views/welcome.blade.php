<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>
    <h1>Bem vindo, {{$first_name}}</h1>
    <p>teste: {!! $html !!}</p>

    {{-- para utilizar as condicionais, se for ternaria funciona de boa --}}
    {{ $first_name == 'Elquiane' ? 'Sim' : 'Não'}}

    {{-- já para o if()else... você não consegue passar a condicional assim --}}
    {{-- não é necessario chaves para codigos maiores --}}
    @if($first_name == 'Elquiane')
        <h1>Sim é igual</h1>
    @else
        <h1>
            Não é igual -
            {{-- no blade, pra separar a pasta é por '.' e não por '/' --}}
            @component('components.btn')
            @slot('cor')
                yellow
            @endslot
            Teste 1
            @endcomponent

            @component('components.btn')
            @slot('cor')
                grey
            @endslot
            Teste 2
            @endcomponent
        </h1>
    @endif

    {{-- os laços de repetição funciona da mesma maneira do @if, nada mudou --}}

    {{-- como entender os componentes do blade como tag html --}}
    {{-- podemos povoar ele também --}}
    <x-teste>
        <p>teste</p>
        <h2>mais um teste</h2>
    </x-teste>
</body>
</html>
