@extends('layouts.base')

@section('contenido')
<section id="acercade" class="tarjeta">
    <h2>Acerca de nosotros</h2>
    <p>Somos una tienda especializada en la importacion de calzados y ropa de alta calidad. Nuestro objetivo es ofrecer a nuestros clientes una experiencia de compra segura y satisfactoria.</p>

    <hr class="separador">

    <h3>Sugerencias y Nuevos Modelos</h3>
    <p>¿Buscas algun calzado o marca en especial? Cuentanos y evaluaremos traerlo en nuestro proximo pedido.</p>

    <form id="form-sugerencia" novalidate method="POST" action="{{ route('sugerencia.guardar') }}">
        @csrf
        <label for="nombre">Nombre </label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo electronico</label>
        <input type="email" id="correo" name="correo" required>

        <label for="whatsapp">Telefono</label>
        <input type="tel" id="whatsapp" name="whatsapp">

        <label for="sugerencia">¿Qué producto te gustaría encontrar?</label>
        <textarea id="sugerencia" name="sugerencia" rows="3" required></textarea>

        <button type="submit" class="btn-enviar-pedido">Enviar sugerencia</button>

        <p id="aviso-sugerencia" class="aviso"></p>
    </form>
</section>
@endsection