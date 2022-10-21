@extends('layouts.layouts')
@section('content')
<h2> Registro de usuarios </h2 > 

<div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">CLAVE</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NOMBRE</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="col_one_third col_last c-azul">
   <label for="nacimiento">FECHA DE CREACION<small></small></label>
   <input type="date" id="nacimiento"  name="nacimiento"  class="sm-form-control">
    </div>

  
    <div class="col_one_third col_last c-azul">
   <label for="nacimiento">FECHA DE MODIFICACION<small></small></label>
   <input type="date" id="nacimiento"  name="nacimiento"  class="sm-form-control">
    </div>


    <div class="form-group">
    <label for="exampleFormControlFile1">FOTO</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

</form>

<button type="submit" class="btn btn-primary">Submit</button>
<input type="button"class="btn btn-danger"  value="Página anterior" onClick="history.go(-1);"></input>

</form>

@endsection
