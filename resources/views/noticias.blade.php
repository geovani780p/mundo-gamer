@extends('layouts.app')

@section('titulo', 'Noticias')

@section('contenido')
    <h1 class="text-3xl font-bold text-center mb-6">Últimas Noticias Gamer</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-800 rounded-lg p-4 shadow-md">
            <img src="https://cdn.pixabay.com/photo/2017/08/06/01/24/controller-2588925_1280.jpg" alt="Noticia 1" class="rounded mb-3">
            <h2 class="text-xl font-semibold mb-2">E3 regresa en 2025</h2>
            <p>El evento más grande del gaming está de vuelta con anuncios de Xbox, PlayStation y Nintendo.</p>
        </div>

        <div class="bg-gray-800 rounded-lg p-4 shadow-md">
            <img src="https://cdn.pixabay.com/photo/2015/11/01/19/10/game-1016640_1280.jpg" alt="Noticia 2" class="rounded mb-3">
            <h2 class="text-xl font-semibold mb-2">Nuevo trailer de GTA VI</h2>
            <p>Rockstar revela un nuevo avance del tan esperado título con gráficos impresionantes.</p>
        </div>

        <div class="bg-gray-800 rounded-lg p-4 shadow-md">
            <img src="https://cdn.pixabay.com/photo/2016/11/29/06/15/xbox-1867426_1280.jpg" alt="Noticia 3" class="rounded mb-3">
            <h2 class="text-xl font-semibold mb-2">Xbox Game Pass se expande</h2>
            <p>Más títulos indie y AAA llegan a la plataforma este mes.</p>
        </div>
    </div>
@endsection
