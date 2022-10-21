@extends('layouts.layouts')
@section('content')
<html>
    <head></head>
    <center><h2>EDITAR DATOS</h2></center>

<hr>
<form action="{{ route('salvar',['id' => $usuarios->id_usuario]) }}" method="POST" entype ="multipart/form-data">
{{ csrf_field() }}   
{{ method_field('PUT')  }}

<table>
<tr>
    <td colspan='2'>
    @if(count($errors) > 0 )
    @foreach($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
    @endif
  </td>
   
 
<tr>
  <td> Matricula(clave):</td>
  <td>
    <input type="text" name="matricula" value="{{ $usuarios->matricula}}">
    @if($errors->first('matricula')) <i>{{$errors->first('matricula') }} </i> @endif
  </td>

</tr>

<td> NOMBRE:</td>
  <td>
    <input type="text" name="nombre" value="{{$usuarios->nombre}}">
    @if($errors->first('clave')) <i>{{$errors->first('clave') }} </i> @endif
  </td>

</tr>
<tr>
<td> Apellido Paterno:</td>
  <td>
    <input type="text" name="app" value="{{$usuarios->app}}">
    @if($errors->first('app')) <i>{{$errors->first('app') }} </i> @endif
  </td>

</tr>
<tr>

<td> Apellido Materno:</td>
  <td>
    <input type="text" name="apm" value="{{$usuarios->apm}}">
    @if($errors->first('apm')) <i>{{$errors->first('apm') }} </i> @endif
  </td>

</tr>
<tr>
<td> Fecha De Nacimiento:</td>
  <td>
    <input type="date" name="fech_nac" value="{{$usuarios->fech_nac}}">
    @if($errors->first('fech_nac')) <i>{{$errors->first('fech_nac') }} </i> @endif
  </td>

</tr>
<tr>

<td> Genero:</td>
  <td>
    FEMENINO: <input type="radio" name="genero" value="FEMENINO"   {{$usuarios->genero == "FEMENINO"?'checked':'';  }}
    MASCULINO: <input type="radio" name="genero" value="MASCULINO" {{$usuarios->genero == "MASCULINO"?'checked':''; }}

  </td>

</tr>
<tr>




<td> Foto:</td>
  <td>
    <input type="text" name="foto" value="{{$usuarios->foto}}">
    
  </td>

</tr>
<tr>

<td> Email:</td>
  <td>
    <input type="text" name="email" value="{{$usuarios->email}}">
    @if($errors->first('email')) <i>{{$errors->first('email') }} </i> @endif
  </td>

</tr>
<tr>

<td> Contraseña:</td>
  <td>
    <input type="text" name="pass" value="{{$usuarios->pass}}">
    @if($errors->first('pass')) <i>{{$errors->first('pass') }} </i> @endif
  </td>

</tr>
<tr>
<td> NIVEL:</td>
<td>
    <input type="text" name="nivel" value="{{$usuarios->nivel}}">
    @if($errors->first('nivel')) <i>{{$errors->first('nivel') }} </i> @endif
  </td>

</tr>
<tr>

<td> activo:</td>
<td>
<div class="form-group">
    <div class="form-check">
      <input  type="checkbox" id="gridCheck" name="activo" value="{{$usuarios->activo}}">
      @if($errors->first('activo')) <i>{{$errors->first('activo') }} </i> @endif activo</label></td>
    </div>
  
    </tr>


<tr>
<td colspan="2">
  <td>
    <input type="submit" value="Salvar Registrar">
    <a href="{{ route('lista_usuario') }}"><button type="button">REGRESAR</button></a>
  </td>
  </tr>




</table>



</form>

</center>
</html>
@endsection