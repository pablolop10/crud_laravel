@extends('layouts.app')
@section('content')
<?php

function historial($user) {
  $sql = "SELECT * FROM citas WHERE user = '$user' ORDER BY fecha ASC";
            $result = DB::select($sql);
 return $result;
}

function fechahoy($fechasolicitada, $horasolicitada){
$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
$fecha_entrada = strtotime("$fechasolicitada $horasolicitada");
if($fecha_actual < $fecha_entrada) {
    return 1;
} else {
    return 0;
}
}
?>
<style>
#acc1 {
  margin-left: 75%;
}

@media (max-width:1395px)
{
  #acc1 {
  margin-left: 65%;
}
}

@media (max-width:906px)
{
  #acc1 {
  margin-left: 55%;
}
}
@media (max-width:600px)
{
  #acc1 {
  margin-left: 45%;
}
}
@media (max-width:450px)
{
  #acc1 {
  margin-left: 30%;
}
}


</style>
 <center>
  <table id="historialcitas" >
  
    <tr>
     
  <th>Historial de Citas</th>
 
  </tr>
@foreach (historial(Auth::user()->name) as $hcitas)
<tr>

  <td> {{$hcitas->fecha}} //
   {{$hcitas->hora}} --->
 {{$hcitas->motivo}}
 </td>
 
 <td>
  @if (fechahoy($hcitas->fecha, $hcitas->hora) == 1)
  <form action="{{route('eliminarcita', $hcitas->id)}}" method="post">
    {{ csrf_field() }}
    <button class="buttoneliminar" type="submit" >Cancelar</button>
  </form>
  @else
  <button class="buttonpasado">Antigua</button>
  @endif
 </td>

 

</tr>

@endforeach
</table>
 </center>

   <div class="container mt-5" style="max-width: 450px">
        <h2 class="mb-4">Pedir cita</h2>
        <form action="{{route('guardarcita')}}" method="POST">
          {{ csrf_field() }}
        <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
            <input type='text' id="selfecha" name="selfecha" class="form-control" value=""/>
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
        <button type="submit" name="submit" class="button-36">Seleccionar Fecha</button>
        </form>
   </div>


  @if (isset($selfecha))
  @yield('horas')
  @endif




   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('.date').datepicker({  
       format: 'yyyy-mm-dd'
     }); 
    </script>  
    
@endsection