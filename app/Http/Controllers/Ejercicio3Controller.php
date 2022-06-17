<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function Ejercicio3(){
        return view('Ejercicio3.Ejercicio3');
        }
        public function resultado_Ej3(Request $request){
            $horas=$request->horas;
            $valor=$request->valor;
            if($horas>=50){
                $valor=$valor+($valor*0.3);
                $salario=$horas*$valor;
            }else{
                $salario=$horas*$valor;
            }

        return view('Ejercicio3.resultado_Ejercicio3', compact('salario'));
        }
}
