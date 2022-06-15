@extends('layouts.app')
       
@section('content')  
 <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">  
        @if (isset($producto))
            @foreach ($producto as $item)
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src='{{$item->imagen}}' style="width: 100%; height: 60%;">
            <div class="card-body p-4">
                <div id="producinfo" class="text-center">
                    <h5 class="fw-bolder">{{$item->nombre}}</h5>
                    {{$item->precio}}€
                </div>
              </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
           <div class="text-center">
            @if (isset(Auth::user()->tipo_usuario))  
            @if (Auth::user()->tipo_usuario)
            @else
            <div id="verprodu" class="row">
              <div  class="col">
                <a  class="btn btn-outline-dark text-dark mt-auto" href="{{route('productos', $item->id)}}">Ver producto</a>
              </div>
            </div>
            @endif
            @else
            <div id="verprodu" class="row">
              <div  class="col">
                <a  class="btn btn-outline-dark text-dark mt-auto" href="{{route('productos', $item->id)}}">Ver producto</a>
              </div>
            </div>
            @endif
            @if (isset(Auth::user()->tipo_usuario))  
            @if (Auth::user()->tipo_usuario)
             <div id="editarprodu" class="row">
               <div class="col">
             <form action="{{route('editar', $item->id)}}" method="post">
              {{ csrf_field() }}
            <button class="btn btn-outline-success text-success mt-auto" type="submit">Editar</button>
          </form>
               </div>
               <div class="col">
          <form action="{{route('eliminar', $item->id)}}" method="post">
            {{ csrf_field() }}
            <button class="btn btn-outline-danger text-danger mt-auto" type="submit" >Eliminar</button>
          </form>
               </div>
            </div>
            @endif
            @endif
          </div>    
          </div>
        </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
 
  
  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  @endsection
