<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citas;

class citascontroller extends Controller
{
    public function inicio() {
        // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
   
        return view('citas');
     }

     function showDate(Request $request)
     {
        dd($request->date);
     }
    }