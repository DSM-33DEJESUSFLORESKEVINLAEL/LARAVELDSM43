@extends('layouts.layouts')
@section('content')
   
   <center> <h2>LISTAS DE TIPOS</h2><br></center>
    <hr>
<table class="table table table-striped table-dark">
  <thead>
    
  </thead>
  <tr>
        <td>ID</td>
        
        <td>NOMBRE</td>
        <td>DETALLE</td>
        <td>ACTIVO</td>
        <td>FECHA_CREA</td>
        <td>FECHA_MOD</td>
        <th>EDITAR</th>
        <th>REGISTRO</th>
   
        </tr>
       @foreach($tipos1 as $tipos)
       <tr>
       
        <td>{{$tipos->id_tipos}}</td>
        
        <td>{{$tipos->nombre}}</td>
        <td>{{$tipos->detalle}}</td>
        <td>{{$tipos->ACTIVO}}
        @if($tipos->activo ==1)
<b style="color: #0f0;">DISPONIBLE</b>
@else
<b style="color: #f00;">NO DISPONIBLE</b>
@endif 
</td>
        <td>{{$tipos->fecha_crea}}</td>
        <td>{{$tipos->fecha_mod}}</td>
        <td><a href="{{ route('editar_usuario',['id' => $tipos ->id_tipos]) }}"><button type="button" class="btn btn-info">EDITAR</button></td>
        <td><a href="{{ route('registro_tipos',['id' => $tipos ->id_tipos]) }}"><button type="button" class="btn btn-success">REGISTRO</button></td>

        
          </tr>
        @endforeach
      </table>


      @endsection