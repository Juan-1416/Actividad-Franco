<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    public function Ejercicio6()
    {
        return view('Ejercicio6.Ejercicio6');
    }
    public function resultado_Ej6(Request $request)
    {
        $nombre=$request->nombre;
        $parcial1=$request->parcial1;
        $parcial2=$request->parcial2;
        $valor=(($parcial1*0.4)+($parcial2*0.6));
        if($valor<2.0){
            $respuesta=$nombre.' tu nivel es malo tu nota es '.$valor;
        }elseif($valor>=2.0 && $valor<= 3.0){
        $respuesta = $nombre.' tu nivel es insuficiente tu nota es '.$valor;
        }elseif($valor> 3.0 &&$valor <= 4.0){
            $respuesta = $nombre.' tu nivel es aceptable tu nota es '.$valor;
        }elseif($valor> 4.0&& $valor <= 4.5){
            $respuesta= $nombre.' tu nivel es bueno tu nota es '.$valor;
        }elseif($valor> 4.5){
            $respuesta=$nombre.' tu nivel es exelente tu nota es '.$valor;
        }
        return view('Ejercicio6.resultado_Ejercicio6', compact('respuesta'));
    }
}
