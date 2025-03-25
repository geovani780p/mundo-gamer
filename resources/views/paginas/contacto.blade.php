@extends('layouts.app')

@section('title', 'Contacto')

@section('contenido')
    <h2>Contáctanos</h2>
    <form>
        <input type="text" placeholder="Tu nombre">
        <input type="email" placeholder="Tu correo">
        <textarea placeholder="Tu mensaje"></textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection
