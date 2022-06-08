@extends('layouts.app')
@section('content')
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