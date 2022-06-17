<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function Ejercicio4()
    {
        return view('Ejercicio4.Ejercicio4');
    }
    public function resultado_Ej4(Request $request)
    {
        $numero = $request->numero;
        $valor = 0;
        if ($numero >= 1001) {
            $respuesta = 'no puedes ingresar este numero porque es mayor de lo permitido';
        } else {
            for ($i = 0; $i <= $numero; $i++) {
                $valor = $valor + $i;
            }
            $respuesta = 'la suma es: '. $valor;
        }
        return view('Ejercicio4.resultado_Ejercicio4', compact('respuesta'));
    }
}
