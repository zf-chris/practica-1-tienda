<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Sugerencia;
use App\Models\Juguete;


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



Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes.index', compact('juguetes'));
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes.nuevo');
});

Route::post('/juguetes/nuevo', function () {
    $mensajes = [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required' => 'pone la cantidad de stock',
        'stock.integer' => 'Aca la cantidad de stock va entero, sin decimales ni letras.',
    ];

    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer',
    ], $mensajes);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    return redirect('/juguetes');
});