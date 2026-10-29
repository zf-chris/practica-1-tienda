@extends('layouts.base')

@section('contenido')
  <section class="tarjeta" >
    <h2>Iniciar Sesion</h2>

    @if (session('error'))
      <p style="color: #ef4444; font-weight: bold;">{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST">
      @csrf
      <p>
        <label for="email">Correo electronico:</label><br>
        <input type="email" id="email" name="email" required >
      </p>
      <p>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required >
      </p>
      <button type="submit">Entrar</button>
    </form>
  </section>
@endsection