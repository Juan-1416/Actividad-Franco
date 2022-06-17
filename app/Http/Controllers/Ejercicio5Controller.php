<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    public function Ejercicio5()
    {
        return view('Ejercicio5.Ejercicio5');
    }
    public function resultado_Ej5(Request $request)
    {
        $radio=$request->radio;
        $altura=$request->altura;
        $volumen=3.14*($radio*$radio)*$altura;
        $area=(2*3.14)*$radio*$altura+(2*3.14)*($radio*$radio);
        $respuesta= 'El volumen es: ' .$volumen. ' El area es: ' .$area;
        return view('Ejercicio5.resultado_Ejercicio5', compact('respuesta'));
    }
}
