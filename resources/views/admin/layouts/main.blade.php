<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    </head>

    <body>
        @include('navigation-menu')
        @yield('conteudo')
    </body>
</html>