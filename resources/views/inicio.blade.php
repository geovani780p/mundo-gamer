@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
<style>
    .hero {
        background-image: url('https://t3.ftcdn.net/jpg/04/67/96/14/360_F_467961418_UnS1ZAwAqbvVVMKExxqUNi0MUFTEJI83.jpg');
        background-size: cover;
        background-position: center;
        padding: 100px 30px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }
</style>

<div class="hero text-center text-white mb-5">
    <div class="hero-content">
        <h1 class="display-4 fw-bold">🎮 Mundo Gamer</h1>
        <p class="lead">Explora los mejores juegos, noticias y reseñas del universo gamer</p>
        <a href="{{ url('/juegos') }}" class="btn btn-outline-light btn-lg mt-3">Ver Juegos</a>
    </div>
</div>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-white h-100 shadow">
            <img src="https://t3.ftcdn.net/jpg/04/67/96/14/360_F_467961418_UnS1ZAwAqbvVVMKExxqUNi0MUFTEJI83.jpg" class="card-img-top" alt="Juegos">
            <div class="card-body">
                <h5 class="card-title">Juegos</h5>
                <p class="card-text">Conoce los títulos más populares y nuevos lanzamientos.</p>
                <a href="{{ url('/juegos') }}" class="btn btn-primary">Explorar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-white h-100 shadow">
            <img src="https://t3.ftcdn.net/jpg/04/67/96/14/360_F_467961418_UnS1ZAwAqbvVVMKExxqUNi0MUFTEJI83.jpg" class="card-img-top" alt="Noticias">
            <div class="card-body">
                <h5 class="card-title">Noticias</h5>
                <p class="card-text">Entérate de lo último en la industria del gaming.</p>
                <a href="{{ url('/noticias') }}" class="btn btn-primary">Leer más</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-white h-100 shadow">
            <img src="https://t3.ftcdn.net/jpg/04/67/96/14/360_F_467961418_UnS1ZAwAqbvVVMKExxqUNi0MUFTEJI83.jpg" class="card-img-top" alt="Reseñas">
            <div class="card-body">
                <h5 class="card-title">Reseñas</h5>
                <p class="card-text">Consulta opiniones honestas de los gamers.</p>
                <a href="{{ url('/reseñas') }}" class="btn btn-primary">Ver reseñas</a>
            </div>
        </div>
    </div>
</div>
@endsection
