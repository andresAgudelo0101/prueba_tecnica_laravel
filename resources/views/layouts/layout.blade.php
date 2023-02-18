<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body class="bg-light">
    <div class="container ">
        <div class="">
            <a href="{{ route('tienda.create') }}">Registrar Tienda</a>
        </div>
        <div class="">
            @yield('contenido')
        </div>
        <div class="">
            footer
        </div>
    </div>
</body>
</html>