@extends('layouts.layouts')
@section('content')

<h2>USUARIO DETALLE</h2>
<hr>
<img src="{{ asset ('archivos/usuarios/'. $detalle->foto) }}" style="width:150px"><br>
<h3>NOMBRE:                {{$detalle->app  .' '. $detalle->apm .' '. $detalle->nombre}}</h3>
<B>CLAVE</B>               {{$detalle->matricula}}<br>
<b>FECHA DE NACIMIENTO</b> {{$detalle->fech_nac}}<br>
<b>GENERO</b>              {{$detalle->genero}}<br>
<b>EMAIL</b>               {{$detalle->email}}<br>
<b>CONTRASEÑA</b>          {{$detalle->pass}}<br>
<B>RESULTADO</B>           {{$detalle->id_usuario -20 }}<br>
<hr><br>


<tr>
<td colspan="2">
  <td>
    <a href="{{ route('lista_usuario') }}"><button type="button">REGRESAR</button></a>
  </td>
  </tr>

@endsection
