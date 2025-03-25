@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
<div class="container mt-5">
    <h1 class="text-center mb-4">Contáctanos</h1>
    <p class="text-center mb-5">¿Tienes dudas, sugerencias o quieres colaborar con nosotros? ¡Escríbenos!</p>

    <form class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" placeholder="tu@email.com">
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje..."></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
