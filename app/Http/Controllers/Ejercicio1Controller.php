<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function Ejercicio1(){
        return view('Ejercicio1.Ejercicio1');
        }
        public function resultado_Ej1(Request $request){
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;

        $resultado=$numero1+$numero2;
        return view('Ejercicio1.resultado_Ejercicio1', compact('resultado'));
        }

}
