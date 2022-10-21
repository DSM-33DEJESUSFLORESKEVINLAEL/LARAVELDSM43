@extends('layouts.layouts')
@section('content')

<html>
    <head></head>
    <center>EDITAR</center>
<h2>EDITAR TIPOS </h2>
<hr>
<form action="{{ route('salvar', ['id ' => $tipo->id_tipo]) }}" method="POST" entype ="multipart/form-data">


{{ csrf_field() }}
{{ method_field('PUT')  }}
<table>
 
<tr>
    <td>MATRICULA(CLAVE):</td>
    <td>
        <input type="text" name="clave" value="{{$tipo-> id_tipo  }} ">
        @if($errors->first('clave')) <i>{{$errors->first('clave') }}</i>@endif
    </td>
</tr>


</table>



</form>



</form>

<button type="submit" class="btn btn-primary">Submit</button>
	
<input type="button"class="btn btn-danger"  value="Página anterior" onClick="history.go(-1);"></input>
</form>
@endsection