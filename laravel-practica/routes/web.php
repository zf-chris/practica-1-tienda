<?php

use Illuminate\Support\Facades\Route;

Route::get('/tienda', function () {
    return view('inicio');
}) ->name('inicio');

Route::get('/tienda/productos', function () {
    return  view('productos');
}) ->name('productos');

Route::get('/tienda/contacto', function () {
    return  view('contacto');
})  ->name('contacto');

Route::get('/tienda/acerca', function () {
    return  view('acerca');
})  ->name('acerca');