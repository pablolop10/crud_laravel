@extends('citas')

@section('horas')
<?php
function consulta($time, $selfecha) {
  $sql = "SELECT count(hora) as 'hora' FROM citas WHERE hora LIKE '$time' AND fecha LIKE '$selfecha'";
            $result = DB::select($sql);
  return $result[0]->hora;
}

function fechahoy2($fechasolicitada, $horasolicitada){
$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
$fecha_entrada = strtotime("$fechasolicitada $horasolicitada");
if($fecha_actual < $fecha_entrada) {
    return 1;
} else {
    return 0;
}
}


?>

@if (isset($selfecha))
@if (fechahoy2($selfecha, "00:00:00") == 0)
<br>
<center><p style="color: red">Error, la fecha introducida no es correcta, Vuelva a intentarlo otra vez</p></center>
@else
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">  
        
@if (consulta("10:00:00",$selfecha)<2)        
        <div class="col mb-5">
          <div class="card h-100">
            <form action="{{route('guardarhora', ["10", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                10:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif
       
          
        
@if (consulta("10:30:00",$selfecha)<2)
        <div class="col mb-5">
          <div class="card h-100">
            <form action="{{route('guardarhora', ["10", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                10:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif
@if (consulta("11:00:00",$selfecha)<2)
        <div class="col mb-5">  
          <div class="card h-100">
            <form action="{{route('guardarhora', ["11", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                11:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif
@if (consulta("11:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["11", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                11:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("12:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["12", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                12:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("12:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["12", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                12:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("13:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["13", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                13:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("13:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["13", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                13:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("15:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["15", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                15:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("16:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["16", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                16:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("16:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["16", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                16:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("17:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["17", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                17:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("17:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["17", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                17:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("18:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["18", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                18:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("18:30:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["18", "30", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                18:30
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif

@if (consulta("19:00:00",$selfecha)<2)
        <div class="col mb-5"> 
          <div class="card h-100">
            <form action="{{route('guardarhora', ["19", "00", "00"])}}" method="POST" class="btn card-body p-4">
              {{ csrf_field() }}
              <input name="fecha" id="fecha" value="{{$selfecha}}" style="display: none"/>
              <input name="userconf" id="userconf" value="{{Auth::user()->name}}" style="display: none"/>
            <button type="submit"  class="btn card-body p-4" style="width: 100%" style="height: 100%" style="margin: 0 auto">
              <div class="text-center">
                19:00
              </div>
            </button> 
          </form>
          </div>
        </div>
@endif


        </div>
      </div>
    </div>
  </section>

  @if(isset($compararfechahora))
  <section class="py-5">
    
    <form action="{{route('confirmarcita', ["$h", "$m", "$s", $userconf])}}" method="POST">
      {{ csrf_field() }}
      <center>
        <div class="form-group" style="max-width: 1200px">
      
          <label for="fechahora">Fecha y Hora</label>
          <input type="text" readonly class="form-control" name="fechadef" id="fechadef" aria-describedby="emailHelp" value="{{$selfecha}}" style="max-width: 150px" >
          <br>
          <input type="text" readonly class="form-control" name="horadef" id="horadef" aria-describedby="emailHelp" value="{{$hora}}" style="max-width: 150px" >
          
        
        </div>

      <div class="form-group" style="max-width: 1200px">
      
        <label for="usuariodef">Usuario de cita</label>
        <input type="text" readonly class="form-control" id="usuariodef" name="usuariodef" aria-describedby="emailHelp" @if (isset( Auth::user()->name)) value="{{ Auth::user()->name }}" @endif  style="max-width: 150px">
        
      
      </div>
       
      <div class="form-group" style="max-width: 1200px">
        <label for="select">Motivo de la cita</label><br>
        <select class="form-select" name="select" id="select" aria-label="Default select example">
          <option selected>Elige un motivo</option>
          <option value="Corte y Peinar">Corte y Peinar</option>
          <option value="Corte">Corte</option>
          <option value="Lavar">Lavar</option>
        </select>
      </div>

      <div class="form-group" id="desotro" style="max-width: 1200px">
      <label id="labdesc" style="display: none"></label>
      <input type="text" id="desc" style="display: none"/>
    </div>
   
      <button type="submit" class="btn btn-primary">Confirmar Cita</button>
    </center>
    </form>
  </section>
    @endif

  </section>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script>
  var checkbox = document.getElementById('select');
checkbox.addEventListener("change", validaCheckbox, false);
function validaCheckbox()
{
  var checked = checkbox.value;
 if(checked == "Corte y Peinar") {
    
    const label = document.getElementById("labdesc");
    label.style = "display: block";
    label.innerHTML = "Precio:";
    label.for = "desc";
    const input = document.getElementById("desc");
    input.style = "display: block";
    input.class = "form-control";
    input.readOnly = true;
    input.value = "20€";
    input.style = "max-width: 100px;";
    
  } else if(checked == "Corte") {
    
    const label = document.getElementById("labdesc");
    label.style = "display: block";
    label.innerHTML = "Precio:";
    label.for = "desc";
    const input = document.getElementById("desc");
    input.style = "display: block";
    input.class = "form-control";
    input.readOnly = true;
    input.value = "10€";
    input.style = "max-width: 100px;";
    
  }else if(checked == "Lavar") {
    
    const label = document.getElementById("labdesc");
    label.style = "display: block";
    label.innerHTML = "Precio:";
    label.for = "desc";
    const input = document.getElementById("desc");
    input.style = "display: block";
    input.class = "form-control";
    input.readOnly = true;
    input.value = "4€";
    input.style = "max-width: 100px;";
    
  }
}
</script>
@endif
  @endif
  @endsection