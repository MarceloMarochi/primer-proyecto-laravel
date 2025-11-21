@extends('layouts.app')

@section('content')
    <h1>Sumar dos números</h1>

    <form action="/suma" method="POST">
        <!-- @csrf Instrucción para que laravel identidfique si le da permisos de 
        solicitud. Es un complemento que brinda un valor encriptado para
        que laravel recepcione la información del formulario  -->
        @csrf 
        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <br>
        <label for="num2">Numero 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <br>
        <button type="submit">Sumar</button>
        
    </form>

    @if(isset($resultadoParametro))
        <p>Resultado de la suma: {{ $resultadoParametro }}</p>
    @endif

@endsection