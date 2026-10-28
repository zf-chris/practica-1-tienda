@extends('layouts.base')

@section('contenido')
<section id="productos" class="tarjeta">
    <h2>Catálogo de Productos</h2>
    <article>
        <h3>Zapatillas Deportivas Modelo X</h3>
        <p>Zapatillas de alta calidad, ideales para el día a día.</p>
        <ul>
            <li>Tallas disponibles: 38, 39, 40, 42</li>
            <li>Colores: Blanco, Negro</li>
        </ul>
        <p>Precio: 50.00 Bs</p>
        <a href="https://wa.me/59160756775" target="_blank">
            <button type="button">Reservar por WhatsApp</button>
        </a>
    </article>
</section>
@endsection