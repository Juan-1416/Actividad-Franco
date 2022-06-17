@extends('Template.Template')
@section('plantillaweb')

<h2>Ejercicio 5</h2>

<p>Se necesita desarrollar un programa que solicite a un usuario el radio y altura de un cilindro para dar
    como respuesta el volumen y área del cilindro.</p>

<form action="{{route('resultado_Ej5')}}" method="post">
    {{ csrf_field() }}
    <label>Digite el radio</label>
    <input type="number" name="radio" step="0.001">
    <label>Digite la altura </label>
    <input type="number" name="altura" step="0.001">
    <input type="submit" name="btn_enviar" value="Presionar">
</form>
@endsection
