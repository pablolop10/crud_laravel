@extends('citas')

@section('horas')
<?php
function consulta($time, $selfecha) {
  $sql = "SELECT count(hora) as 'hora' FROM citas WHERE hora LIKE '$time' AND fecha LIKE '$selfecha'";
            $result = DB::select($sql);
  return $result[0]->hora;
}
?>
@if (isset($selfecha))
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">  
        
        <div class="col mb-5">
          <div class="card h-100">
            <button class="btn card-body p-4">
              <div class="text-center">
               10:00
              </div>
            </button>
          </div>
        </div>

       
          
        
@if (consulta("10:30:00",$selfecha)<2)
        <div class="col mb-5">
          <div class="card h-100">
            <form action="{{route('guardarhora', [10, 30, 00])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                10:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif
        <div class="col mb-5">  
          <div class="card h-100">
            <button class="btn card-body p-4">
              <div class="text-center">
                11:00
              </div>
            </button> 
          </div>
        </div>

        <div class="col mb-5"> 
          <div class="card h-100">
            <button class="btn card-body p-4">
              <div class="text-center">
                11:30
              </div>
            </button> 
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>

  @if(isset($compararfechahora))
  <section class="py-5">
 
  </section>
    @endif

  </section>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  @endif
  @endsection