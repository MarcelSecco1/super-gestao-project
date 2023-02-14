<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('site.layout._partials.header')

    @yield('conteudo')
</body>

</html>
