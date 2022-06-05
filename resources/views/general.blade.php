@extends('layouts.app')
       
@section('content')               
<div id="divtotal" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         
          <table  >
          
            <tr>
            <th>
              imagen
            </th>
            <th>
              nombre
            </th>
            <th>
              marca
            </th>
            <th>
              precio
            </th>
          </tr> 
        @if (isset($producto))
            @foreach ($producto as $item)
            <tr>
              <td><img id="com" src='{{$item->imagen}}'></td>
              <td> {{$item->nombre}}</td>
              <td> {{$item->marca}}</td>
              <td> {{$item->precio}}€</td>
           @if (isset(Auth::user()->tipo_usuario))  
           @if (Auth::user()->tipo_usuario)
            <td>  <form action="{{route('editar', $item->id)}}" method="post">
              {{ csrf_field() }}<button class="button-36" type="submit">Editar</button></td>
            </form>
            <td><form action="{{route('eliminar', $item->id)}}" method="post">
              {{ csrf_field() }}<button class="button-36"  type="submit">Eliminar</button></td>
            </form>
            @endif
            @endif
            </tr>
          
           
        @endforeach
        @endif
          
          </table>
          
        </div>
  @endsection
