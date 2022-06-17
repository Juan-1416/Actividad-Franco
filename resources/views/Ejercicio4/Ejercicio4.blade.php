@extends('Template.Template')
@section('plantillaweb')

<h2>Ejercicio 4</h2>

<p>Sumar los números enteros solicitando al usuario el número hasta el que se desea sumar; validar
    que el número máximo a ingresar sea 1000, ej: Digite los números a sumar: 5 -> Sumara los
    números 1,2,3,4,5 = Respuesta=> 15</p>

<form action="{{route('resultado_Ej4')}}" method="post">
    {{ csrf_field() }}
    <label>Digite un numero</label>
    <input type="number" name="numero">
    <input type="submit" name="btn_enviar" value="Presionar">
</form>
@endsection
