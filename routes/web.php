<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('inicio');
});

/* Route::get('/suma', function () {
    return view('suma');
}); */

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'suma']);


/* Route::post('/suma', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 + $num2;

    // Acá estoy definiendo el nombre del resultadoParametro
    return view('suma', ['resultadoParametro' => $resultado]);
}); */

Route::get('/productos', [ProductoController::class, 'index']);