@extends('Template.Template')
@section('plantillaweb')
    <h2>Ejercicio 6</h2>

    <p>Realizar un programa el cual reciba de un formulario la siguiente información de un estudiante:
        Nombre, Calificación del primer parcial y calificación del examen final y en seguida calcule e imprima
        el valor de la calificación definitiva, teniendo en cuenta que ella se obtiene como el 40% de la
        calificación del primer Parcial más el 60% de la calificación del examen final. Además, deberá imprimirun
        mensaje de aprobó o reprobó según corresponda y concepto valorativo el cual se obtiene de la
        siguiente manera:
        Malo si la calificación definitiva es inferior a 2.
        Insuficiente: si la calificación definitiva va desde 2 y es inferior a 3.
        Aceptable: si la calificación definitiva va desde 3 y es inferior a 4.
        Bueno: si la calificación definitiva va desde 4 y es inferior a 4.5.
        Excelente: si la calificación definitiva va desde 4.5 en adelante.</p>

    <form action="{{ route('resultado_Ej6') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>Digite el nombre </label>
            <input type="text" name="nombre">
        </div>
        <div class="col">
            <label>Digite la nota del primer parcial </label>
            <input type="number" name="parcial1" step="0.001">
        </div>
        <div class="col">
            <label>Digite la nota del examen final </label>
            <input type="number" name="parcial2" step="0.001">
        </div>
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection
