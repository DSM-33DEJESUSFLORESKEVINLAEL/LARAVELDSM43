@extends('layouts.layouts')
@section('content')

<table class="table table table-striped table-dark">
  <thead>
    
  </thead>
  <tr>
  <center> <h2>LISTAS DE PRODUCTOS</h2></center> 
  <br>
   <hr> 
<table class="table table table-striped table-dark">
  <thead>
    
  </thead>
  <tr>
        <tr>
        <tH>id_productos</td>
        <tH>codigo</td>
        <tH>nombre</td>
        <tH>cantidad</td>
        <tH>costo</td>
        <tH>id_tipo</td>
        <tH>id_tienda</td>
        <tH>activo</td>
        
        <tH>foto</td>
        <th>EDITAR</th>
        <th>REGISTRO</th>

       

     </tr>
       @foreach($productos1 as $productos)
       <tr>
       
        <td>{{$productos-> id_productos}}</td>
        <td>{{$productos-> codigo}}</td>
        <td>{{$productos-> nombre}}</td>
        <td>{{$productos-> cantidad}}</td>
        <td>{{$productos-> costo}}</td>
        <td>{{$productos-> id_tipo}}</td>
        <td>{{$productos-> id_tienda}}</td>
        <td>{{$productos-> activo}}
@if($productos->activo ==1)
<b style="color: #0f0;">DISPONIBLE</b>
@else
<b style="color: #f00;">NO DISPONIBLE</b>
@endif </td>
       
        <td>{{$productos->foto}}
        <img src="{{ asset ('archivos/productos/'.$productos->foto) }}" style="width:50px"></td>
        <td><a href="{{ route('editar_usuario',['id' => $productos ->id_productos]) }}"><button type="button" class="btn btn-info">EDITAR</button></td>

        <td><a href="{{ route('registro_productos',['id' => $productos ->id_productos]) }}"><button type="button" class="btn btn-success">REGISTRO</button></td>

        
        
          </tr>
        @endforeach
      </table>
    

@endsection

