<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citas;

class citascontroller extends Controller
{
    public function inicio() {
        // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
   $margencitas = "1";
        return view('horas', ["margencitas" => $margencitas]);
     }

   

     public function guardarcita(Request $request){
         $selfecha=$request->selfecha;  

            return view('horas', ["selfecha" => $selfecha]);
         
   
}




public function guardarhora($h, $m, $s, Request $request){
   
    $hora=$h.":".$m.":".$s;
    $selfecha=$request->fecha;
    $userconf=$request->userconf;
    $compararfechahora = 1;
   
return view('horas', ["hora" => $hora, "h" => $h, "m" => $m, "s" => $s, "userconf"=>$userconf, "selfecha" => $selfecha, "compararfechahora" => $compararfechahora]);
}



public function confirmarcita(Request $request){
    $nuevacita = new citas;
    if ($request->fechadef != null) {
        $nuevacita->fecha = $request->fechadef;
    }
    if ($request->horadef != null) {
        $nuevacita->hora = $request->horadef;
    }
    if ($request->usuariodef != null) {
        $nuevacita->user = $request->usuariodef;
    }
    if ($request->select != null) {
        $nuevacita->motivo = $request->select;
    }
    $nuevacita->save();
    return redirect('/citas');
}

public function eliminarcita($id){
    $citadel= citas::find($id);
    $citadel->delete();
    return redirect('/citas');
       
    }

    }