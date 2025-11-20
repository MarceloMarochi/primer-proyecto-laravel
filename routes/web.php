<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function () {
    return view('suma');
});