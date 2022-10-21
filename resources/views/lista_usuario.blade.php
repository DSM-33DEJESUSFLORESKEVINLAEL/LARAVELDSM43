@extends('layouts.layouts')
@section('content')
<center><h2> LISTA DE USUARIOS </h2 > <br></center>


<hr>
<table class="table table table-striped table-dark">
  <thead>
    
  </thead>
  <tr>
   <th>IDMATRICULA</th>
   <th>MATRICULA</th>
   <th>NOMBRE</th>
   <th>APELLIDO PATERNO</th>
   <th>APELLIDO MATERNO</th>
   <th>GENERO</th>
   <th>FECHA DE NACIMIENTO</th>
   <th>FOTO</th>
   <th>EMAIL</th>
   <th>PASS</th>
   <th>NIVEL</th>
   <th>ACTIVO</th>
   <th>DETALLE</th>
   <th>REGISTRO</th>
   <th>EDITAR</th>
   <th>ELIMINAR</th>
  </tr >
  
  @foreach($usuarios1 as $usuarios)

  
  <tr>
  <td>{{$usuarios-> id_usuario  }} </td>
     <td>{{$usuarios-> matricula }} </td>
     <td>{{$usuarios-> nombre }}</td>
     <td>{{$usuarios-> app }}</td>
     <td>{{$usuarios-> apm }}</td>
     <td>{{$usuarios-> genero }}</td>
     <td>{{$usuarios->fech_nac}}</td>
     <td>{{$usuarios-> foto }}
     <img src="{{ asset ('archivos/usuarios/'.$usuarios->foto) }}" style="width:50px"></td>
     <td>{{$usuarios-> email }}</td>
     <td>{{$usuarios-> pass }}</td>
     <td>{{$usuarios-> nivel }}</td>
     <td>{{$usuarios-> activo }}
     @if($usuarios->activo ==1)
     <b style="color: #0f0;">DISPONIBLE</b>
@else
<b style="color: #f00;">NO DISPONIBLE</b>
@endif 
</td>
<td><a href="{{ route('detalle_usuario',['id' => $usuarios->id_usuario]) }}"><button type="button" class="btn btn-secondary">DETALLE - {{$usuarios ->id_usuario}}</button></td>

<td><a href="{{ route('registro_usuario',['id' => $usuarios->id_usuario]) }}"><button type="button" class="btn btn-success">REGISTRO - {{$usuarios ->id_usuario}}</button></td>
<td><a href="{{ route('editar_usuario',['id' => $usuarios->id_usuario]) }}"><button type="button" class="btn btn-info">EDITAR - {{$usuarios ->id_usuario}}</button></td>

<td><a href="{{ route('borrarusuario/{id_usuario}',['id_usuario' => $usuarios->id_usuario]) }}"><button type="button" class="btn btn-danger">ELIMINAR - {{$usuarios ->id_usuario}}</button></td>

  </tr>
  @endforeach
  
</table>




@endsection