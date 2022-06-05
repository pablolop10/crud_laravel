<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class generalcontroller extends Controller
{
    public function inicio() {
        // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
   
        return view('inicio');
     }



    public function menu() {
        // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
        
        $Producto = new productos;
        $producto = $Producto->getAll();
        return view('general', ["producto" => $producto]);
     }

     public function eliminar($id){
        $menu= productos::find($id);
        $menu->delete();
        return redirect('/menu');
           
        }

        public function editar($id){
            $editar= productos::find($id);
            return view('editar', ["editar" => $editar]);

               
            }

            public function guardar($id, Request $request){
             
                $guardar= productos::find($id);
                if ($request->nombre != null){
                $guardar->nombre=$request->nombre;
                $guardar->save();
                   
            }
            if ($request->categoria != null){
                $guardar->categoria=$request->categoria;
                $guardar->save();
                   
            }
            if ($request->precio != null){
                $guardar->precio=$request->precio;
                $guardar->save();
                   
            }
            if ($request->imagen != null){
                $guardar->imagen=$request->imagen;
                $guardar->save();
                   
            }
            return redirect('/menu');
        }

        public function registrarse() {
            // $tareas = array("comprar el pan","estudiar cliente","sacar al perro");
            
            $registrarse = new productos;
            return view('registrarse', ["registrarse" => $registrarse]);
         }

         public function registrar(Request $request) {
            $nuevo= new Productos;
            $nuevo->categoria = "";
            $nuevo->precio = 0.0;
            $nuevo->imagen = "";
            if ($request->nombre != null){
            $nuevo->nombre=$request->nombre;
            $nuevo->save();
               
        }
        if ($request->categoria != null){
            $nuevo->categoria=$request->categoria;
            $nuevo->save();
               
        }
        if ($request->precio != null){
            $nuevo->precio=$request->precio;
            $nuevo->save();
               
        }
        if ($request->imagen != null){
            $nuevo->imagen=$request->imagen;
            $nuevo->save();
               
        }
        return redirect('/menu');
         }
}
