@extends('Template.Template')
@section('plantillaweb')

<h2>Ejercicio 1</h2>
<p>Diseñar un formulario en HTML el cual solicite 2 números enteros y permita realizar las operaciones
aritméticas. Devolviendo el valor de estas en pantalla.</p>



<form action="{{route('resultado_Ej1')}}" method="post">
    {{ csrf_field() }}
    <label>Digite el primer numero</label>
    <input type="number" name="numero1">
    <label>Digite el segundo numero</label>
    <input type="number" name="numero2">
    <input type="submit" name="btn_enviar" value="Presionar">
</form>
@endsection
