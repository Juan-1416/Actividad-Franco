<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function Ejercicio2(){
        return view('Ejercicio2.Ejercicio2');
    }
    public function resultado_Ej2(Request $request){

        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $numero3 = $request->numero3;

        $suma12=$numero1+$numero2;
        $suma13=$numero1+$numero3;
        $suma23=$numero2+$numero3;
        if($suma12==$numero3){
            $respuesta=' la suma del numero ' .$numero1. ' con el numero ' .$numero2. ' da como resultado el tercer numero el cual es '.$numero3;
        }elseif($suma13==$numero2){
            $respuesta=' la suma del numero ' .$numero1. ' con el numero ' .$numero3. ' da como resultado el tercer numero el cual es '.$numero2;
        }elseif($suma23==$numero1){
            $respuesta=' la suma del numero ' .$numero2. ' con el numero ' .$numero3. ' da como resultado el tercer numero el cual es '.$numero1;
        }else{
            $respuesta = 'Ningun numero concide';
        }
        return view('Ejercicio2.resultado_Ejercicio2', compact('respuesta'));
    }
}
