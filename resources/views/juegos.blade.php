@extends('layouts.app')

@section('titulo', 'Juegos')

@section('contenido')
    <h1>Juegos Destacados</h1>

    <div class="grid">
        <div class="card">
            <img src="https://upload.wikimedia.org/wikipedia/en/9/9d/Breath_of_the_Wild.jpg" alt="Zelda">
            <h2>The Legend of Zelda: Breath of the Wild</h2>
            <p>Aventura en mundo abierto</p>
        </div>
        <div class="card">
            <img src="https://upload.wikimedia.org/wikipedia/en/9/9d/God_of_War_Ragnarok_cover.jpg" alt="God of War">
            <h2>God of War: Ragnarok</h2>
            <p>Acción y mitología nórdica</p>
        </div>
        <div class="card">
            <img src="https://upload.wikimedia.org/wikipedia/en/b/bb/Elden_Ring_Box_art.jpg" alt="Elden Ring">
            <h2>Elden Ring</h2>
            <p>RPG desafiante de mundo abierto</p>
        </div>
    </div>
@endsection
