<?php
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.principal');
});

Route::get('/catalogo', function () {
    return view('front.catalogo');
});

Route::get('/quienes-somos', function () {
    return view('front.quienes-somos');
});

Route::get('/comercializacion', function () {
    return view('front.comercializacion');
});

Route::get('/contacto', function () {
    return view('front.contacto');
});

Route::get('/terminos-y-uso', function () {
    return view('front.terminos-y-uso');
});

Route::get('/registrarse', function () {
    return view('backend.usuarios.registrarse');
});

Route::get('/ingresar', function () {
    return view('backend.usuarios.ingresar');
});

Route::get('/catalogo2', function () {
    return view('front.catalogo2');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);