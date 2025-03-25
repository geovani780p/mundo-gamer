<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Mundo Gamer')</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Orbitron', sans-serif;
        }
        nav {
            background-color: #1f1f1f;
        }
        nav a {
            color: #00ffcc;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffffff;
        }
        footer {
            background-color: #1f1f1f;
            padding: 1rem;
            margin-top: 3rem;
            text-align: center;
            color: #aaa;
        }
        .main-container {
            padding-top: 2rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-light" href="/">🎮 Mundo Gamer</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="/juegos" class="nav-link">Juegos</a></li>
                <li class="nav-item"><a href="/noticias" class="nav-link">Noticias</a></li>
                <li class="nav-item"><a href="/reseñas" class="nav-link">Reseñas</a></li>
                <li class="nav-item"><a href="/contacto" class="nav-link">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container main-container">
    @yield('contenido')
</div>

<footer>
    © {{ date('Y') }} Mundo Gamer. Todos los derechos reservados @leonardo geovani
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
