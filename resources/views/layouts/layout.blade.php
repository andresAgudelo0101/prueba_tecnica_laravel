<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="@yield('estilo')">
    <title>@yield('titulo')</title>
</head>

<body class="bg-light">
    <main class="container-fluid">
        <header class="menu">
            <nav class="d-flex justify-content-center p-4">
                <ul class="navbar-nav  mb-2 mb-lg-0 flex-md-col flex-sm-row gap-3">
                    <li class="nav-item">
                        <a href="{{ route('tienda.index') }}" class="nav-link">Ver Tiendas</a>
                    </li>
                    <li>
                        <a href="{{ route('producto.index') }}" class="nav-link">Ver Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tienda.create') }}" class="nav-link">Registrar Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('producto.create') }}" class="nav-link">Registrar Producto</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="">
            @yield('contenido')
        </div>
        <footer class="footer">
            Hecho con ❤️ para Treda solutions
        </footer>
    </main>
</body>

</html>
