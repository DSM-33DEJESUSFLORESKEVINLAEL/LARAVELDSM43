@extends('layouts.layouts')
@section('content')
   
   <center><h2>LISTAS DE TIENDA</h2><br></center> 
    <hr>
  
<table class="table table table-striped table-dark">
  <thead>
    
  </thead>
  <tr>
        
        <TH>ID</TH>
        <TH>CLAVE</tH>
        <TH>NOMBRE</tH>
        <TH>FECHA_CREA</tH>
        <TH>FECHA_MOD</tH>
        <TH>foto</tH>
        <Th>    </Th>
        <th>EDITAR</th>
        <th>REGISTRO</th>
      
       

     </tr>
       @foreach($tienda2 as $tienda)
       <tr>
       
        <td>{{$tienda->id_tienda}}</td>
        <td>{{$tienda->clave}}</td>
        <td>{{$tienda->nombre}}</td>
        <td>{{$tienda->fecha_crea}}</td>
        <td>{{$tienda->fecha_mod}}</td>
        <td>{{$tienda->foto}}</td>
        <td><img src="{{ asset ('archivos/tienda/'.$tienda->foto) }}" style="width:50px"></td>
        <td><a href="{{ route('editar_usuario',['id' => $tienda ->id_tienda]) }}"><button type="button" class="btn btn-info">EDITAR</button></td>

        <td><a href="{{ route('registro_tienda',['id' => $tienda ->id_tienda]) }}"><button type="button" class="btn btn-success">REGISTRO</button></td>

         </tr>
        @endforeach
      </table>
 

@endsection