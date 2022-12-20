<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <style>
        body{
            margin: 0;
            padding:  0;
        }
    </style>
</head>
<body>
    {{-- @section('header')
    @show --}}
    {{-- geralmente é passado os valores fixos logo por aqui (como o nav e o footer) --}}
    <x-nav></x-nav>
    <main>
        @yield('content')
    </main>

    <x-footer></x-footer>
    {{-- @section('footer')
    @show --}}
</body>
</html>
