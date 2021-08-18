<!-- conexion a BD -->
<?php include ('config/db.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags to make it mobile responsive-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS CDN-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<title>Fenatrano</title>

<!-- Incluyendo el main.css de mi proyecto-->
<link rel="stylesheet" href="css/main.css">

</head>
<body>
     
<nav class="navbar navbar-expand-sm navbar-dark" id="barra">
    <a class="navbar-brand" id="fenatrano" >Fenatrano</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Salir</a>
            </li>
           
        </ul>
    
    </div>
</nav>


<div class="container mt-5">

<h5>Si el profesor encuentra que he copiado o me he dejado copiar código de esta práctica, lo autorizo a que me repruebe la materia.</h5>
<br>
<!-- Arreglar botones -->
<div class="btn-toolbar" role="toolbar" aria-label="">
    <div class="btn-group" role="group" aria-label="">
        <button type="button"class="btn btn-primary" ><a href="camiones.php">CAMIONES</a></button>
        <button type="button"class="btn btn-primary" ><a href="lavadoras.php">LAVADORAS</a></button>
        <button type="button"class="btn btn-primary" ><a href="despachos.php">DESPACHOS</a></button>
    </div>
    
</div>
</div> 
 <!-- Arreglar botones ♪♪♪♪♪--> 
<div class="container mt-5">
 <div class="card">
   <div class="card-title"><h2 class="text-align container"><center>¿Que es Fenatrano?</center></h2></div>
   <div>

    <p>
    Es una Empresa dedicada al transporte de Lavadoras a nivel maxivo.<br>
    Somos distribuidores #1 a nivel nacional.
    </p>
<hr>
    <p>
    ▼Para Registrar un camion:<br>
      ► Selecciona el boton camiones <br>
      ► Una vez llenado el formulario, da click en guardar.<br>
      ► Click en Despachos, para ver toda la informacion que has procesado.
  
    </p>
    <hr>
    <p>
    ▼Para Registrar una lavadora:<br>
      ► Selecciona el boton lavadoras <br>
      ► Una vez llenado el formulario, da click en guardar.<br>
      ► Click en Despachos, para ver toda la informacion que has procesado.
  
    </p>
   </div>


</div>
</div>
</body>
</html>