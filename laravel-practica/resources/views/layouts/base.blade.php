<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Tienda Web: Calzados y Ropa</title>
</head>
<body>
    <header>
        <h1>Tienda Web: Calzados y Ropa</h1>
        <button type="button" id="btn-tema" class="boton-modo">🌞 Modo día</button>
        <nav>
            <button type="button" id="btn-menu" class="hamburguesa">☰ Menú</button>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('productos') }}">Productos</a></li>
                <li><a href="{{ route('contacto') }}">Contactanos</a></li>
                <li><a href="{{ route('acerca') }}">Acerca de</a></li>
                @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn-cerrar">Cerrar sesion</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Iniciar sesion</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>
    <main> 
        @yield('contenido')
    </main>
    <footer>
        <p>&copy; 2026 Tienda Web - Desarrollado por Christian Zarate Fernandez</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>