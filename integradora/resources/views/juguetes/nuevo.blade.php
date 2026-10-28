@extends('layouts.base')

@section('contenido')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/juguetes/nuevo" method="POST">
    @csrf

    <div>
        <label for="nombre">nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre">
    </div>
    <div>
        <label for="precio">precio:</label>
        <input type="number" id="precio" name="precio">
    </div>

    <button type="submit">Registrar juguete</button>
</form>

@endsection