@extends('Template.Template')
@section('plantillaweb')

<h2>Ejercicio 3</h2>

<p> un trabajador le pagan según sus horas y una tarifa de pago por horas. Si la cantidad de horas
trabajadas es mayor a 50 horas. La tarifa se incrementa en un 30% para las horas extras Calcular el
salario del trabajador dadas las horas trabajadas y la tarifa.</p>

<form action="{{route('resultado_Ej3')}}" method="post">
    {{ csrf_field() }}
    <label>Digite la horas trabajadas</label>
    <input type="number" name="horas">
    <label>Digite la tarifa de pago</label>
    <input type="number" name="valor">
    <input type="submit" name="btn_enviar" value="Presionar">
</form>
@endsection
