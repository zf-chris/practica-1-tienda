@extends('layouts.base')

@section('contenido')

<p>El Trompo es una jugueteria tradicional de barrio que ofrece una gran variedad de juguetes para toda la familia.</p>

<p>Hay {{ count($juguetes) }} juguetes en el estante.</p>

<ul>
    @foreach ($juguetes as $juguete)
        <li>{{ $juguete->nombre }} - Precio: {{ $juguete->precio }} Bs - Stock: {{ $juguete->stock }} unidades</li>
    @endforeach
</ul>

<p>Estante atendido por Christian Zarate Fernandez</p>

<p><a href="/juguetes/nuevo">Registrar nuevo juguete</a></p>

@endsection