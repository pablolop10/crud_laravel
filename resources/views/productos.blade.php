@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5 my-5" style="background-color: white" >
    <div class="row gx-4 gx-lg-5 align-items-center" style="margin-top: 20%; ">
        @if (isset($mostrar))
        <div class="col-md-6">
            <img src="{{$mostrar->imagen}}" style="width: 80%; height: 80%;">
        </div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bolder">{{$mostrar->nombre}}</h1>
            <div class="fs-5 mb-5">
                <span>Marca: {{$mostrar->marca}}</span>
                <br>
                <span>{{$mostrar->precio}}€</span>
            </div>
            <p class="lead">{{$mostrar->descripcion}}</p>
            <div class="d-flex">
               
            </div>
        </div>
    @endif

    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection