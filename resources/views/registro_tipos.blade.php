@extends('layouts.layouts')
@section('content')
<h2> Registro de Tipos </h2 > 


<div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">NOMBRE</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">DETALLE</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">ACTIVO</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            ACTIVO
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            NO DISPONIBLE
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>


  
  <div class="col_one_third col_last c-azul">
   <label for="nacimiento">FECHA DE CREACION<small></small></label>
   <input type="date" id="nacimiento"  name="nacimiento"  class="sm-form-control">
    </div>

  
    <div class="col_one_third col_last c-azul">
   <label for="nacimiento">FECHA DE MODIFICACION<small></small></label>
   <input type="date" id="nacimiento"  name="nacimiento"  class="sm-form-control">
    </div>
  
</form>

<button type="submit" class="btn btn-primary">Submit</button>

<input type="button"class="btn btn-danger"  value="Página anterior" onClick="history.go(-1);"></input>

</form>

@endsection
