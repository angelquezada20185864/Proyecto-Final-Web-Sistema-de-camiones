<?php
require 'config/db.php';

$btnname = $_POST["btnname"];
$btnemail= $_POST["btnemail"];
$btnusario= $_POST["btnusario"];
$btncontraseña= $_POST["btncontraseña"];

$consulta= "INSERT INTO `login` (`Nombre`, `Correo`, `Usuario`, `Contraseña`) VALUES ('$btnname', '$btnemail', '$btnusario', '$btncontraseña')";
$q= mysqli_query($connection,$consulta);

if(!$q){

echo 'Error de Registro';


}else{

echo 'Registrado Exitosamente <br>'; 
echo 'Da Click en  ir al login';

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>

    a{
        text-align: center;
        font-size: 25px;
        font-family: cursive;
        color:blue;
        border-radius: 8px;
    }

    </style>
    <title>Fenatrano</title>
  </head>
  <body>
    <div class="container mt-5">
    <a href="login.php">Ir a Login</a>
    </div>



  </body>
</html>

