@extends('layouts.layouts')
@section('content')
<h2> Registro de Productos </h2 > 

<div class="form-group">
    <label for="exampleInputEmail1">ID MATRICULA</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CODIGO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">NOMBRE</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>


 <div class="form-group">
    <label for="exampleInputEmail1">CANTIDAD</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">COSTO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">ID TIPO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">ID TIENDA</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>




  <div class="form-group">
    <label for="exampleInputEmail1">ACTIVO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>




  <div class="form-group">
    <label for="exampleFormControlFile1">FOTO</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>





</form>
<center>
<button type="submit" class="btn btn-primary">Submit</button>
	
<input type="button"class="btn btn-danger"  value="Página anterior" onClick="history.go(-1);"></input>
</center>

</form>

@endsection