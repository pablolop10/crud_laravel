<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citas;

class citascontroller extends Controller
{
    public function inicio() {
        // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
   
        return view('horas');
     }

     public function guardarcita(Request $request){
         $selfecha=$request->selfecha;  

    return view('horas', ["selfecha" => $selfecha]);
}


public function guardarhora($h, $m, $s, Request $request){
    $hora=$h.":".$m.":".$s;
    $selfecha=$request->fecha;
    $compararfechahora = 1;
return view('horas', ["hora" => $hora, "selfecha" => $selfecha, "compararfechahora" => $compararfechahora]);
}

    }