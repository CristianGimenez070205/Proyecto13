<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
