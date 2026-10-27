<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Sugerencia;

Route::get('/', function () {
    return view('inicio');
}) ->name('inicio');

Route::get('/productos', function () {
    return  view('productos');
}) ->name('productos');

Route::get('/contacto', function () {
    return  view('contacto');
})  ->name('contacto');

Route::get('/acerca', function () {
    return  view('acerca');
})  ->name('acerca');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();
        return redirect('/acerca'); 
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::post('/sugerencia/guardar', function (Request $request) {
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'sugerencia' => 'required',
    ]);

    Sugerencia::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'whatsapp' => $request->whatsapp,
        'sugerencia' => $request->sugerencia,
    ]);
    return back()->with('success', '¡Muchas gracias, sugerencia recibida!');
})->name('sugerencia.guardar')->middleware('auth');