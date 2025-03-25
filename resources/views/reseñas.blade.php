@extends('layouts.app')

@section('titulo', 'Reseñas')

@section('contenido')
<h1 class="text-center mb-5">Reseñas de Videojuegos</h1>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card bg-dark text-white h-100">
            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/YMUoJUYNX0xWk6eTKuZLr5Iw.jpg" class="card-img-top" alt="Elden Ring">
            <div class="card-body">
                <h5 class="card-title">Elden Ring</h5>
                <p class="card-text">⭐⭐⭐⭐⭐ (5/5)<br>Una obra maestra en dificultad, mundo abierto y lore. Totalmente recomendado.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-dark text-white h-100">
            <img src="https://assets.nintendo.com/image/upload/ar_16:9,c_lpad,w_1065/b_white/f_auto/q_auto/ncom/software/switch/70010000063714/956c12eb1a4c9e68b494cca7efd23d20ba8a789a5eb02589affae64bc6bc3282"card-img-top" alt="Zelda TOTK">
            <div class="card-body">
                <h5 class="card-title">Zelda: Tears of the Kingdom</h5>
                <p class="card-text">⭐⭐⭐⭐⭐ (5/5)<br>Creatividad sin límites, físicas alucinantes y exploración sin igual.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-dark text-white h-100">
            <img src="https://assetsio.gnwcdn.com/how-hollow-knights-community-crafted-gibberish-into-a-real-language-1567781461548.jpg?width=1920&height=1920&fit=bounds&quality=80&format=jpg&auto=webp" class="card-img-top" alt="Hollow Knight">
            <div class="card-body">
                <h5 class="card-title">Hollow Knight</h5>
                <p class="card-text">⭐⭐⭐⭐ (4/5)<br>Un metroidvania desafiante, hermoso y atmosférico.</p>
            </div>
        </div>
    </div>
</div>
@endsection
