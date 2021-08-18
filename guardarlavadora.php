<?php 

require 'config/db.php';

// Recibiendo los datos 
$btncodigo = $_POST["btncodigo"];
$btnmarca = $_POST["btnmarca"];
$btnmodelo = $_POST["btnmodelo"];
$btnvalor = $_POST["btnvalor"];
$btnpeso = $_POST["btnpeso"];







//Preparando la Orden SQL

$consulta ="INSERT INTO `lavadoras` ( `Codigo`, `Marca`, `Modelo`, `Valor`, `Peso_libra`) VALUES ('$btncodigo', '$btnmarca', '$btnmodelo', '$btnvalor', '$btnpeso')";
$resultado = mysqli_query($connection,$consulta);

if(!$resultado){

    echo 'Error de guardado';
}else{
    echo 'Guardado exitosamente';

    
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
        font-family: cursive;
        color:blue;
        text-align: center;
    }

        </style>
    <title>fenatrano</title>
  </head>
  <body>
 
    <a class="nav-link" href="index.php">Home</a>
    <a href="camiones.php">Camiones</a>
    <a href="lavadoras.php">Lavadoras</a>
    <a href="despachos.php">Despachos</a>

  </body>
</html>
