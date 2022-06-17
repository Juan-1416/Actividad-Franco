@extends('Template.Template')
@section('plantillaweb')
    <h2>Ejercicio 2</h2>

<p>Leer tres números y determinar si la suma de cualquier pareja de ellos es igual al tercer número. Si
se cumple esta condición escribir "Iguales", en caso contrario, escribir "Distintas".</p>

    <form action="{{ route('resultado_Ej2') }}" method="post">
        {{ csrf_field() }}
        
        <label>Digite el numero 1</label>
        <input type="number" name="numero1">
        </div>
        <div class="col">
            <label>Digite el numero 2</label>
            <input type="number" name="numero2">
        </div>
        <div class="col">
            <label>Digite el numero 3</label>
            <input type="number" name="numero3">
        </div>
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection
