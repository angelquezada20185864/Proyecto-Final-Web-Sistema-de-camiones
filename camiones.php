<!-- conexion a BD -->
<?php include ('config/db.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Incluyendo el main.css de mi proyecto-->
<link rel="stylesheet" href="css/main.css">
    <title>Fenatrano</title>
  </head>
  <body>
      <!-- Barra de navegacion de Fenatrano-->
  <nav class="navbar navbar-expand-sm navbar-dark" id="barra">
    <a class="navbar-brand" id="fenatrano" >Fenatrano</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Salir</a>
            </li>
           
        </ul>
    
    </div>
</nav>

<!--Logica de la Pagina a partir de aqui en adelante -->

<div class="container mt-5">
<div class="btn-toolbar" role="toolbar" aria-label="">
    <div class="btn-group" role="group" aria-label="">
        <button type="button"class="btn btn-primary" ><a href="camiones.php">CAMIONES</a></button>
        <button type="button"class="btn btn-primary" ><a href="lavadoras.php">LAVADORAS</a></button>
        <button type="button"class="btn btn-primary" ><a href="despachos.php">DESPACHOS</a></button>
    </div>
    
</div>
</div>

<!-- formulario de camiones -->


<div class="container">
  <form method="POST" action="guardarcamion.php">
<div class="form-group">
  <label for=""></label>
  <input type="text" class="form-control" name="btnmarca"  aria-describedby="helpId" placeholder="Marca">
</div>
<div class="form-group">
  <label for=""></label>
  <input type="text" class="form-control" name="btnmodelo"  aria-describedby="helpId" placeholder="Modelo">
</div>
<div class="form-group">
  <label for=""></label>
  <input type="text" class="form-control" name="btncolor"  aria-describedby="helpId" placeholder="Color">
</div>
<div class="form-group">
  <label for=""></label>
  <input type="text" class="form-control" name="btncomentario"  aria-describedby="helpId" placeholder="Comentario">
</div>

<input name="Guardar"  class="btn btn-primary" type="submit">

  </body>
</html>