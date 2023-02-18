<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<body class="bg-light">
    <main class="container ">
        <header class="">
            <nav>
                <a href="{{ route('tienda.create') }}">Registrar Tienda</a>
                <a href="{{ route('producto.create') }}">Registrar Producto</a>
            </nav>
        </header>
        <div class="">
            @yield('contenido')
        </div>
        <footer class="">
            footer
        </footer>
    </main>
</body>
</html>