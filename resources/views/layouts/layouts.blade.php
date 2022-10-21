<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">   
</head>
<body class="container">
<nav class="navbar navbar-expand-lg " style="background-color: #008000;"  >
  <div class="container-fluid" >
  <h3>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav" >
       </li>
        <li class="nav-item">
        <img src="{{ asset ('archivos/UTVT.jfif') }}" alta='UTVT.jfif' with="300" heigt="75"> 
      </li> 
      </li>
        <h4><li class="nav-item">
          <a class="nav-link" href="{{ route('lista_usuario')}}">LISTA USUARIOS</a>
        </li></h4>


       

        <h4><li class="nav-item">
          <a class="nav-link" href="{{ route('lista_tipos')}}">LISTA TIPOS</a>
        </li></h4>
        <h4><li class="nav-item">
          <a class="nav-link" href="{{ route('lista_tienda')}}">LISTA TIENDA</a>
        </li></h4>
        <h4><li class="nav-item">
          <a class="nav-link" href="{{ route('lista_productos')}}">LISTA PRODUCTOS</a>
        </li>




     

      
    </div>
  </div>
</nav>
<br><br>

@yield('content')




</body>
</html>
